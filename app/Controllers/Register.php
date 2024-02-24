<?php

namespace App\Controllers;

use \CodeIgniter\Controller;
use App\Models\RegisterModel;
use App\Models\HomeModel;

class Register extends Controller
{
    protected $registerModel;// need to define registermodel
    protected $session;// need to define session
    protected $email; // need to define email
    protected $homeModel;
    public function __construct()
    {
        helper("form"); //this is helper for form
        helper("date"); //this is helper for date use by verifyExpiryTime
        $this->registerModel = new RegisterModel(); // to call the model
        $this->session = \Config\Services::session(); //to call service session
        $this->email = \Config\Services::email(); // to call Service email
        $this->homeModel = new HomeModel;
    }

    public function index()
    {

        $data = [];
        $page_id = 1;
        $data['page_title'] = $this->homeModel->getPageTitle($page_id);
        $data['validation'] = null;

            //getting the value from form_open in register_view
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'username' => 'required|min_length[4]|max_length[20]',
                'email' => 'required|valid_email',
                'pass' => 'required|min_length[6]|max_length[16]',
                'cpass' => 'required|matches[pass]',
                // 'mobile' => 'required|exact_length[10]|numeric'
            ];
                // to insert all validated rules for user database
            if ($this->validate($rules)) {
                $uniid = md5(str_shuffle('abcdefghijklmnopqrstuvwxyz'.time()));
                $userdata = [
                    'username' => $this->request->getVar('username', FILTER_SANITIZE_STRING),
                    'email' => $this->request->getVar('email'),
                    'password' => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT),
                    'uniid' => $uniid,
                    'activation_date' => date("Y-m-d h:i:s")
                ];
                    // to send email from gmail account change the value if needed
                if ($this->registerModel->createUser($userdata)) {
                    $to = $this->request->getVar('email');
                    $subject = 'Account Activation link - Test Link';
                    $message = 'Hi '.$this->request->getVar('username', FILTER_SANITIZE_STRING).",<br><br>Thanks. Your account created"
                            . "succesfully. Please click the link below to activate your account:<br><br>"
                            . "<a href='".base_url()."register/activate/".$uniid."'>Activate Now</a><br><br>Thanks,<br>Team.";

                    $this->email->setTo($to);
                    $this->email->setFrom('No-reply@msg-homes.com', 'Info');
                    // $email->setCC();   //you can also use this
                    // $email->setBCC();  //you can also use this
                    $this->email->setSubject($subject);
                    $this->email->setMessage($message);
                    $this->email->setMailType('html');
                    // $filepath = 'public/assets/images/1.png';  //to attach file 
                    // $email->attach($filepath);
                    if ($this->email->send()) {
                        echo "Account Created successfully: Please Activate your Account";
                    } else {
                        $data = $this->email->printDebugger(['headers']);
                        print_r($data);
                    }
                        //to set templatet success variable to temporary session that is set to expire after 3 seconds
                    $this->session->setTempdata('success', 'Account Created Successfully, Please activate your account', 3);
                    return redirect()->to(current_url());
                } else {
                        //to set templatet error variable to temporary session that is set to expire after 3 seconds
                    $this->session->setTempdata('error', 'Sorry, Unable to send activation link. Please contact the Admin', 3);
                    return redirect()->to(current_url());
                }
            } else {
                $data['validation'] = $this->validator;
            }
        }
        return redirect()->to(base_url());
    }

        // Account activation
    public function activate ($uniid = null)
    {
        
        $data = [];
            //get the uniid from base_url/register/actvate/$uniid
        if (!empty($uniid))
        {
            $userdata = $this->registerModel->verifyUniid($uniid);
            if($userdata)
            {   
                    //Activate account within 1 hour
                if($this->verifyExpiryTime($userdata->activation_date))
                {   
                        //check if the status in database is inactive
                    if($userdata->status == 'inactive')
                    {
                        $status = $this->registerModel->updateStatus($uniid);
                        if($status == true)
                        {
                            $data['success'] = 'Account Activated Successfully';
                        }
                        else
                        {
                            $data['error'] = 'Unexpected error occur Please contact admin';
                        }
                    }
                    else
                    {
                        $data['success'] = 'Your Account is Already Activated';
                    }
                }
                else
                {
                    $data['error'] = 'Sorry, your activation link was expired';
                }
            }
            else
            {
                $data['error'] = 'Sorry, we are Unable to find your account';
            }
            
        }
        else
        {
            $data['error'] = 'Sorry, we are Unable to process your request';
        }
            //returning $data to activate_view.php
        return view('register/activate_view', $data);
    }
        // function to create the expiration time == 3600s or 1hour
    public function verifyExpiryTime($regTime)
    {
        $currTime = now ();  // you need to call helper("date") to use now() 
        $regTime = strtotime($regTime); //strtotime used to parse about any English textual datetime description into a Unix timestamp
        $diffTime = $currTime-$regTime; // you can use (int)$currtime-(int)$regtime if your having problem in numeric value;
        if ($diffTime < 3600)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}