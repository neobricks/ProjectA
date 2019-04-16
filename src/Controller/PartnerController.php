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
        
        if(empty($user)) {
            $this->redirect($this->referer());
        }

    }


    public function index()
    {
        $this->viewBuilder()->setLayout('public');
    }


    public function ajaxUpdatePartner()
    {
        $this->autoRender = false;
        $session = $this->getRequest()->getSession();
        $user = $session->read('User');

        $form_data = $this->request->getData();
        
        $form_data['email'] = $user['email'];
        $form_data['token'] = $user['token'];
        
        $partnerProgram = [];
        if($session->check('PartnerProgram')) {
            $partnerProgram = $session->read('PartnerProgram');
        }

        $partnerProgram = array_merge($partnerProgram, $form_data);

        $session->write('PartnerProgram', $partnerProgram);

        echo json_encode([]);
        //$response = $this->GameweeveApi->user_update($form_data);
    }


    public function testPartnerProgram()
    {
        $this->autoRender = false;
        $session = $this->getRequest()->getSession();
        $partnerProgram = [];
        if($session->check('PartnerProgram')) {
            $partnerProgram = $session->read('PartnerProgram');
        }
        dump($partnerProgram);

        $response = $this->GameweeveApi->user_update($partnerProgram);
        dump($response);
    }


    public function testPartnerProgram2()
    {
        $this->autoRender = false;
        $session = $this->getRequest()->getSession();
        $user = $session->read('User');
        dump($user);

        $userInfo = $this->GameweeveApi->user_info([
            'email' => $user['email'],
            'userNumber' => $user['userNumber']
        ]);
        dump($userInfo);
    }

}
