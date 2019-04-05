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
        $this->request->trustProxy = true;
        $data = $this->request->getData();
        if($data['confirm_password'] === $data['password']){

            $params = [
                'email' => $data['email'],
                'pw' => $data['confirm_password'],
                'password' => $data['password'],
                'ip' => $this->request->clientIp() == '::1' ? '213.61.78.82' : $this->request->clientIp(),
                'userTypeID' => "1",
            ];
            $request = $this->GameweeveApi->register($params);
            $response = $request->json();
            if($response->result > 0){
                $this->Flash->success(__('Your account has been created, you will now receive a confirmation email!'));    
            }else{
                $this->Flash->error(__('We found a error creating your account: {0}',$response->result));
            }
            //{"result":"5","email":"paulo@myog.io","verifyToken":"640ea65ce69e2f929dd04f2ed9031d11"}
        }else{
            $this->Flash->error(__('Password does not match'));
        }
    }

}
