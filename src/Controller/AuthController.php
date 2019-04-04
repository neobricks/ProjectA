<?php
namespace App\Controller;



class AuthController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('GameweeveApi');
    }


    public function register()
    {
        $this->autoRender = false;
        $data = $this->request->getData();


        $data['email'] = 'test1@test.com';
        $data['password'] = 'asddsa.123321';
        $data['confirm_password'] = 'asddsa.123321';

        $params = [
            'email' => $data['email'],
            'pw' => $data['confirm_password'],
            'ip' => $this->request->clientIp(),
            'userTypeID' => 1,
            'password' => $data['password'],
        ];

        $response = $this->GameweeveApi->register($params);

    }

}
