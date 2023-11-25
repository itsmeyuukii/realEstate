<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\Validation\Rules;
use App\Models\LoginModel;
use App\Models\HomeModel;

class Login extends Controller{
    protected $loginModel;
    protected $session;
    protected $homeModel;
    public function __construct()
    {
        helper ('form');
        $this->loginModel = new LoginModel();
        $this->session = \Config\Services::session();
        $this->homeModel = new HomeModel();
    }
    public function index()
    {
        $data = [];
        $data['validation'] = null;
        $page_id = 1;
        $data['page_title'] = $this->homeModel->getPageTitle($page_id);

        //Google Sign in
        // require_once APPPATH."libraries/vendor/autoload.php";
        // $google_client = new \Google_Client();
        // $google_client->setClientId('375542693726-10i3m2vmbpv3ca3c9mcpebg83ff9ci2e.apps.googleusercontent.com');
        // $google_client->setClientSecret('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');

        // $google_client->setRedirectUri(base_url('login.php'));
        // $google_client->addScope('email');
        // $google_client->addScope('profile');

        // if ($this->request->getVar('code'))
        // {
        //     $token = $google_client->fetchAccesTokenWithAuthCode($this->request->getVar('code'));
        //     if(!isset($token['error']))
        //     {
        //         $google_client->setAccessToken($token->access_token);
        //         $this->session->set('access_token', $token->access_token);
        //         //to get the profile data
        //         $google_service = new \Google_Service_Oauth2($google_client);
        //         $data = $google_service->userinfo->get();

        //         if ($this->loginModel->google_user_exists($data))
        //         {

        //         }
        //         else
        //         {

        //         }
        //     }
        // }
        // if(!$this->session->get('access_token'))
        // {
        //     $data['loginButton'] = $google_client->createAuthUrl();
        // }


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
        return view("homeview", $data);
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