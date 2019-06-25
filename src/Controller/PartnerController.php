<?php
namespace App\Controller;

use App\Controller\AppController;

class PartnerController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('GameweeveApi');

        $session = $this->getRequest()->getSession();
        $user = $session->read('User');

        if (empty($user)) {
            $this->redirect($this->referer());
        }
    }


    public function index()
    {


        $this->viewBuilder()->setLayout('public');
        $session = $this->getRequest()->getSession();
        $user = $session->read('User');
		
		$userNumberVar; 
		if	(isset($user['id']))
		{
			$userNumberVar = $user['id']; 
		}else 
		{
			$userNumberVar = $user['userNumber']; 
		}


		$response = $this->GameweeveApi->user_info([
            'email' => $user['email'],
            'userNumber' => $userNumberVar //,
		
        ]);


        //$response = $this->GameweeveApi->user_info([
        //    'email' => $user['email'],
        //    'userNumber' => $user['id'] //,
		//tempo solution
        //    'userNumber' => $user['userNumber']
		//tempo solution
        //]);
        $userInfo = [];

        if ($session->check('userInfo')) {
            $userInfo = $session->read('userInfo');
        }   
        if (isset($response->result)) {
            $userInfo = json_decode($response->result, true);
            $session->write('userInfo', $userInfo);
        }

        $this->set('userInfo', $userInfo);        
    }


    public function ajaxUpdatePartner()
    {
        $this->autoRender = false;
        $session = $this->getRequest()->getSession();
        $user = $session->read('User');

        $form_data = $this->request->getData();

        $form_data['email'] = $user['email'];
        $form_data['token'] = $user['token'];
        //$form_data['userNumber'] = $user['id'];
		//tempo solution
       // $form_data['userNumber'] = $user['userNumber'];
        

		if (isset($user['id'])){
			$form_data['userNumber'] = $user['id'];
		}

		if (isset($user['userNumber'])){
			$form_data['userNumber'] = $user['userNumber'];
		}

        $userInfo = [];
        if ($session->check('userInfo')) {
           $userInfo = $session->read('userInfo');
        }   
        
        $userInfo = array_merge($userInfo, $form_data);

        $response = $this->GameweeveApi->user_update($userInfo);
        if($response) {
            $session->write('userInfo', $userInfo);
        }
        echo json_encode($response);
    }

    public function showUserInfo()
    {
        $this->autoRender = false;
        $session = $this->getRequest()->getSession();
        $userInfo = [];
        if ($session->check('userInfo')) {
           $userInfo = $session->read('userInfo');
        }   
        dump($userInfo);
         
    }


    public function testPartnerProgram()
    {
        $this->autoRender = false;
        $session = $this->getRequest()->getSession();
        $user = $session->read('User');

        

        $partnerProgram = [];
        if ($session->check('PartnerProgram')) {
            $partnerProgram = $session->read('PartnerProgram');
        }
        $partnerProgram['userNumber'] = $user['userNumber'];

        $response = $this->GameweeveApi->user_update($partnerProgram);
    }


    public function testGetPartnerInfo()
    {
        $this->autoRender = false;
        $session = $this->getRequest()->getSession();
        $user = $session->read('User');
        echo "";
        echo "<h1>USER SESSION</h1>";
        dump($user);
       
        $userInfo = $this->GameweeveApi->user_info([
            'email' => $user['email'],
            'userNumber' => $user['userNumber']
        ]);
        echo "<h1>RESULT</h1>";
        dump($userInfo);
    }
}
