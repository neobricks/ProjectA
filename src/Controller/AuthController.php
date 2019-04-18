<?php
namespace App\Controller;



class AuthController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('GameweeveApi');
        $this->loadComponent('Cookie');
    }
    /**
     * This function verify the email send by the api
     * link verifyJson.php
     */
    public function verifyEmail()
    {
        $this->autoRender = false;
        $this->request->trustProxy = true;
        $data = $this->request->getQuery();
        if(isset($data['key']) && isset($data['xyz'])){
            $response = $this->GameweeveApi->user_verify($data);
            if($response->result >= 0){
                $this->Flash->success(__('Your email has been verified thank you'));
                //TODO: If User not Logged we should redirect to Login?
            }else{
                $this->Flash->error(__('We found an error validating your email: {0}',$response->result));
            }
        }else{
            $this->Flash->error(__('Missing key parameter'));
        }
        return $this->redirect($this->referer());
    }
    /**
     * This function Register a new user
     */
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
            $response = $this->GameweeveApi->register($params);
            if($response->result >= 0 && $response->verifyToken){
                $this->Flash->success(__('Your account has been created, you will now receive a confirmation email!'));    
                //TODO: Now we log the user?
            }else{
                $this->Flash->error(__('We found a error creating your account: {0}',$response->result));
            }
            //{"result":"5","email":"paulo@myog.io","verifyToken":"640ea65ce69e2f929dd04f2ed9031d11"}
        }else{
            $this->Flash->error(__('Password does not match'));
        }
        return $this->redirect($this->referer());
    }
    /**
     * This function logs in the user
     */
    public function login()
    {
        $this->autoRender = false;
        $this->request->trustProxy = true;
        $data = $this->request->getData();
        
        if(isset($data['email']) && isset($data['pw']) ){
            $response = $this->GameweeveApi->login($data);
            if(isset($response->result)){
                if($response->result >= 0 && $response->token){
                    
                    $session = $this->getRequest()->getSession();
                    $user = [
                        'email' => $response->email,
                        'token' => $response->token,
                        'userNumber' => $response->result,
                        'partner' => []
                    ];
                    $session->write('User', $user);
                    if(!empty($data['rememberme'])) {
                        $this->Cookie->write('User', $user);
                    }
                    $this->Flash->success(__('Welcome Back'));    
                    //TODO: Now we log the user!
                }else{
                    $this->Flash->error(__('Login Error: {0}',$response->result));
                }
            } else {
                $this->Flash->error(__('You have entered an invalid username or password'));
            }
            
            
        }else{
            $this->Flash->error(__('Missing Email or Password'));
        }
        return $this->redirect($this->referer());
    }
    /**
     * This function logs the user out
     */
    public function logout()
    {
        $this->autoRender = false;
        $this->request->trustProxy = true;
        
        $session = $this->getRequest()->getSession();
        $this->Cookie->delete('User');
        $user = $session->read('User');
       
        if(isset($user['email']) && isset($user['token']) ){
            $data = [
                'email' => $user['email'],
                'token' => $user['token']
            ];
            $response = $this->GameweeveApi->logout($data);
            if(isset($response->result)){
                if($response->result >= 0){
                    
                }else{
                    //$this->Flash->error(__('Logout Error: {0}',$response->result));
                }
            }
        }else{
            
        }
        $session->delete('User');
        return $this->redirect('/');
    }


}
