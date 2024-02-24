<?php

namespace App\Controllers;

use \CodeIgniter\Controller;

class Testmail extends Controller
{
    public function index()
    {

        $to = '';
        $subject = 'Account Activation-Testmail';
        $message = 'Hi Gerard, <br><br> Thanks, Your account is Successfully Created. Please Click the link below to activate your Account <br>'
            . '<a href="' . base_url() . '/testmail/verify" target = "_blank">Activate Now</a><br><br>Thanks<br>Team.';
        $email = \Config\Services::email();
        $email->setTo($to);
        $email->setFrom('gerardyabut.msgrdc@gmail.com', 'Info');
        // $email->setCC();   //you can also use this
        // $email->setBCC();  //you can also use this
        $email->setSubject($subject);
        $email->setMessage($message);
        // $filepath = 'public/assets/images/1.png';  //to attach file 
        // $email->attach($filepath);
        if ($email->send()) {
            echo "Account Created successfully: Please Activate your Account";
        } else {
            $data = $email->printDebugger(['headers']);
            print_r($data);
        }
    }
    public function verify(){
        echo "Account Verified"; 
    }
}