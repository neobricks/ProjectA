<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\TableRegistry;
use App\Model\Table\TblUser;
use App\Model\Table\TblUserInfo;
use App\Model\Table\TblUserInfoJson;
use function Psy\debug;

/**
 * Users Model
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UsersTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->requirePresence('id', 'create');

        $validator
            ->scalar('username')
            ->maxLength('username', 255)
            ->requirePresence('username', 'create')
            ->allowEmptyString('username', false);

        $validator
            ->scalar('password')
            ->maxLength('password', 40)
            ->requirePresence('password', 'create')
            ->allowEmptyString('password', false);

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->allowEmptyString('email', false);

        $validator
            ->scalar('first_name')
            ->maxLength('first_name', 30)
            ->requirePresence('first_name', 'create')
            ->allowEmptyString('first_name', true);

        $validator
            ->scalar('last_name')
            ->maxLength('last_name', 30)
            ->requirePresence('last_name', 'create')
            ->allowEmptyString('last_name', true);

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['username']));
        $rules->add($rules->isUnique(['email']));

        return $rules;
    }

    public function getUser(\Cake\Datasource\EntityInterface $profile) {
        if (empty($profile->email)) {
            throw new \RuntimeException('Could not find email in social profile.');
        }

        $useris = $this->find()
            ->where(['email' => $profile->email])
            ->first();
    
        if ($useris) {
            return $useris;
        }
        
        $userType = 1;

        switch($profile->provider)
        {
            case 'google':
                $userType = 2;
                break;

            case 'facebook':
                $userType = 3;
                break;

            case 'twitch':
                $userType = 4;
                break;
        }
        
        $tblUser = new TblUser(['connection' => $this->connection()]);
        $user = $tblUser->newEntity([
            'pw' => $profile->email,
            'email' => $profile->email,
            'userID' => $profile->identifier,
            'userTypeID' => $userType,
            ]);
        $user = $tblUser->save($user);
        $userNumber = $user->userNumber;

        $tblUserInfo = new TblUserInfo(['connection' => $this->connection()]);
        $userInfo = $tblUserInfo->newEntity([
            'userNumber' => $userNumber,
            'userTypeID' => $userType,
            ]);
        $tblUserInfo->save($userInfo);

        $tblUserInfoJson = new TblUserInfoJson(['connection' => $this->connection()]);
        $userInfoJson = $tblUserInfoJson->newEntity(['userNumber' => $userNumber]);
        $tblUserInfoJson->save($userInfoJson);

        $name = NULL;
        if($profile->first_name){
            $name = $profile->first_name;
        }
        if($profile->full_name){
            $name = $profile->full_name;
        }
        
        // Create new user account
        $user = $this->newEntity([
            'id' => $userNumber,
            'username' => $profile->email,
            'password' => $profile->email,
            'email' => $profile->email,
            'first_name' => $name,
            'last_name' => ($profile->last_name) ? $profile->last_name : NULL,
            ]);
            // echo "<pre>";
            // print_r($user); exit;
        $user = $this->save($user);

        if (!$user) {
            throw new \RuntimeException('Unable to save new user');
        }
    
        return $user;
    }
}
