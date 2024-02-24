<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\Validation\Rules;
use App\Models\LoginModel;
use App\Models\HomeModel;
use App\Models\GoogleLoginModel;

class Login extends Controller{
    protected $gModel;
    protected $loginModel;
    protected $session;
    protected $homeModel;
    public function __construct()
    {
        helper ('form');
        helper('google');
        $this->loginModel = new LoginModel();
        $this->session = \Config\Services::session();
        $this->homeModel = new HomeModel();
        $this->gModel = new GoogleLoginModel();
        
        $this->googleClient = instantiateGoogleClient();
       

    }
    public function index()
    {
        $data = [];
        $data['validation'] = null;
        // Login button
        if($this->request->getMethod() == 'post')
        {
            $rules = [
                'email' => 'required|valid_email',
                'pass' => 'required',
            ];
            if($this->validate($rules))
            {
                $email = $this->request->getVar('email');
                $password = $this->request->getVar('pass');

                $userdata = $this->loginModel->verifyEmail($email);
                if($userdata)
                {
                    if(password_verify($password, $userdata->password))// $userdata->password = $userdata['password] | it is getting the hashpassword column in database
                    {
                        if($userdata->status == 'active') // $userdata->status = $userdata['status] | it is getting the status column in database
                        {
                            $loginInfo = [
                                'email' => $userdata->email,
                                'uniid' => $userdata->uniid,
                                'agent' => $this->getUserAgentInfo(),
                                'ip' => $this->request->getIPAddress(),
                                'login_time' => date('Y-m-d h:i:s'),
                            ];
                            $la_id = $this->loginModel->saveLoginInfo($loginInfo);
                                if ($la_id)
                                {
                                    $this->session->set('logged_info', $la_id);
                                }
                            //getting the email to set in session
                            $this->session->set('logged_user', $userdata->email);// $userdata->email = $userdata['email] | it is getting the email column in database
                            return redirect()->to(base_url(). 'dashboard');
                        }
                        else
                        {
                            $this->session->setTempdata('error', 'Please Activate Your Account. Contact Admin', 3);
                        }
                    }
                    else
                    {
                        $this->session->setTempdata('error', 'Sorry Wrong Password', 3);
                    }
                }
                else
                {
                    $this->session->setTempdata('error', 'Sorry email does not exist', 3);
                }
            }
            else
            {
                $data['validation'] = $this->validator;
            }
        }

    
        return view("layouts/home_base", $data);
    }
    public function loginWithGoogle()
    {
        $token = $this->googleClient->fetchAccessTokenWithAuthCode($this->request->getVar('code'));
        if(!isset($token['error']))
        {
            $this->googleClient->setAccessToken($token['access_token']);
            session()->set("AccessToken", $token['access_token']);

            $googleService = new \Google_Service_Oauth2($this->googleClient);
            $data = $googleService->userinfo->get();
            $currentDateTime = date("Y-m-d H:i:s");
            // echo "<pre>"; print_r($data);die;
            $userdata = array();
            
            if($this->gModel->isAlreadyRegister($data['id'])){
                //User Already registered and want to Login Again
                $userdata = [
                    'full_name' => $data['givenName']. " " . $data['familyName'],
                    'email' => $data['email'],
                    'updated_at' => $currentDateTime
                ];
                $this->gModel->updateUserData($userdata, $data['id']);
            }else{
                //New User and want to Login
                $userdata = [
                    'oauth_id' => $data['id'],
                    'full_name' => $data['givenName']. " " . $data['familyName'],
                    'email' => $data['email'],
                    'profile_img' => $data['picture'],
                ];
                $this->gModel->insertUserData($userdata);
            }
            session()->set("logged_user", $userdata['email']);

        }else{
            session()->set("error", "Something went Wrong");
            return redirect()->to(base_url());
        }
        //Successful Login
        return redirect()->to(base_url("dashboard"));
    }

    // getting the device of the use that logged in
    public function getUserAgentInfo()
    {
        $agent = $this->request->getUserAgent();
        if ($agent->isBrowser())
        {
            $currentAgent = $agent->getBrowser();
        }
        else if ($agent->isRobot())
        {
            $currentAgent = $this->agent->robot();
        }
        else if ($agent->isMobile())
        {
            $currentAgent = $agent->getMobile();
        }
        else
        {
            $currentAgent = 'Unidentified User Agent';
        }
        return $currentAgent;
    }
}



// if($this->request->getMethod() == 'post')
//         {
//             $rules = [
//                 'email' => 'required|valid_email',
//                 'pass' => 'required',
//             ];
//             if($this->validate($rules))
//             {
//                 $email = $this->request->getVar('email');
//                 $password = $this->request->getVar('pass');

//                 $userdata = $this->loginModel->verifyEmail($email);
//                 if($userdata)
//                 {
//                     if(password_verify($password, $userdata->password))// $userdata->password = $userdata['password] | it is getting the hashpassword column in database
//                     {
//                         if($userdata->status == 'active') // $userdata->status = $userdata['status] | it is getting the status column in database
//                         {
//                             $loginInfo = [
//                                 'email' => $userdata->email,
//                                 'uniid' => $userdata->uniid,
//                                 'agent' => $this->getUserAgentInfo(),
//                                 'ip' => $this->request->getIPAddress(),
//                                 'login_time' => date('Y-m-d h:i:s'),
//                             ];
//                             $la_id = $this->loginModel->saveLoginInfo($loginInfo);
//                                 if ($la_id)
//                                 {
//                                     $this->session->set('logged_info', $la_id);
//                                 }
//                             //getting the email to set in session
//                             $this->session->set('logged_user', $userdata->email);// $userdata->email = $userdata['email] | it is getting the email column in database
//                             return redirect()->to(base_url(). 'dashboard');
//                         }
//                         else
//                         {
//                             $this->session->setTempdata('error', 'Please Activate Your Account. Contact Admin', 3);
//                             return redirect()->to(current_url());
//                         }
//                     }
//                     else
//                     {
//                         $this->session->setTempdata('error', 'Sorry Wrong Password', 3);
//                         return redirect()->to(current_url());
//                     }
//                 }
//                 else
//                 {
//                     $this->session->setTempdata('error', 'Sorry email does not exist', 3);
//                     return redirect()->to(current_url());
//                 }
//             }
//             else
//             {
//                 $data['validation'] = $this->validator;
//             }
//         }