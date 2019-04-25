<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */

namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\I18n\I18n;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     * @throws \Exception
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);
        $this->loadComponent('Flash');
        $this->loadComponent('Cookie');

        $session = $this->getRequest()->getSession();
        if($this->Cookie->check('User')){
            $user = $this->Cookie->read('User');
            $session->write('User', $user);
        } else {
            $user = $session->read('User');
        }
        
        $gdpr = false;
        if($this->Cookie->check('gdpr')){
            $gdpr = $this->Cookie->read('gdpr');
        }
        
        /*
         * Enable the following component for recommended CakePHP security settings.
         * see https://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');

        $this->set('user', $user);
        $this->set('gdpr', $gdpr);
    }

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        if($this->Cookie->check('lang')){
            $lang = $this->Cookie->read('lang');
            if($lang) {
                I18n::setLocale($lang);
            }
        }
    }

    public function changeLang($lang = 'en_US')
    {
        $this->Cookie->write('lang', $lang);
        return $this->redirect($this->request->referer());
    }

    public function gdpr() {
        $this->autoRender = false;
        $this->Cookie->write('gdpr', json_encode(['accepted' => 1]));
        echo json_encode([]);
    }

}
