<?php

namespace App\Controllers\Admin;

use CodeIgniter\Controller;
use CodeIgniter\Validation\Rules;
use App\Models\Admin\AdminLoginModel;
use App\Models\HomeModel;

class Adminlogin extends Controller{
    protected $loginModel;
    protected $session;
    protected $homeModel;
    public function __construct()
    {
        helper ('form');
        helper('google');
        $this->loginModel = new AdminLoginModel();
        $this->session = \Config\Services::session();
        $this->homeModel = new HomeModel();
        $this->googleClient = instantiateGoogleClient();
    }
    public function index()
    {
        $data = [];
        $data['validation'] = null;
        $page_id = 1;
        $data['page_title'] = $this->homeModel->getPageTitle($page_id);

        if($this->request->getMethod() == 'post')
        {
            $rules = [
                'username' => 'required',
                'password' => 'required',
            ];
            if($this->validate($rules))
            {
                $user = $this->request->getVar('username');
                $password = $this->request->getVar('password');

                $userdata = $this->loginModel->verifyEmail($user);
                if($userdata)
                {
                    if(password_verify($password, $userdata->password))// $userdata->password = $userdata['password] | it is getting the hashpassword column in database
                    {
                        $loginInfo = [
                            'email' => $userdata->email,
                            'username' => $userdata->username,
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
                        $this->session->set('logged_user', $userdata->username);// $userdata->email = $userdata['email] | it is getting the email column in database
                        return redirect()->to(base_url('admin/dashboard'));
                    }
                    else
                    {
                        $this->session->setTempdata('error', 'Sorry Wrong Password', 3);
                         //add alert here
                    }
                }
                else
                {
                    $this->session->setTempdata('error', 'Sorry email does not exist', 3);
                     //add alert here
                }
            }
            else
            {
                $data['validation'] = $this->validator;
                 //add alert here
            }
        }
        $data['googleButton'] = generateGoogleButton($this->googleClient);
        $data['is_logged_in'] = $this->session->get('logged_user') ? true : false;
        return view("admin/v_adminlogin", $data);
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

