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
        $session->write('User', [
            'name' => 'Dan'
        ]);

        $user = $session->read('User');
        if(empty($user)) {
            $this->redirect($this->referer());
        }

    }


    public function index()
    {
        $this->viewBuilder()->setLayout('public');
    }

}
