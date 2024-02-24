<?php

namespace App\Controllers;

use \CodeIgniter\Controller;
use \App\Models\ContactModel;

class Contact extends Controller{
    protected $contactModel;
    protected $email;
    public function __construct(){
        helper("form");
        $this->contactModel = new ContactModel();
        $this->email = \Config\Services::email(); // to call Service email
    }
    public function index()
    {
        
        $data = [];
        $data['validation'] = null;

        $session = \CodeIgniter\Config\Services::session();
        
        $rules = [
            'first-name' => 'required|min_length[3]|max_length[20]',
            'last-name' => 'required|min_length[3]|max_length[20]',
            'phone' => 'required',
            'email' => 'required|valid_email',
            'message'   => 'required'
        ];

        if ($this->request->getMethod() == 'post')
        {
            if($this->validate($rules))
            {
                $cdata = [
                    'first_name' => $this->request->getVar('first-name', FILTER_SANITIZE_STRING),
                    'last_name' => $this->request->getVar('last-name', FILTER_SANITIZE_STRING),
                    'email' => $this->request->getVar('email', FILTER_SANITIZE_EMAIL),
                    'phone' => (int) $this->request->getVar('phone', FILTER_SANITIZE_NUMBER_INT),
                    'subject' => $this->request->getVar('subject', FILTER_SANITIZE_EMAIL),
                    'message' => $this->request->getVar('message', FILTER_SANITIZE_STRING) // 'message' is for database
                ];
                $to = 'services@msg-homes.com';
                $subject = 'Inquiry' . $this->request->getVar('subject', FILTER_SANITIZE_EMAIL); // Assuming you have a property_name field

                $message = 'New inquiry :<br><br>'
                    . 'First Name: ' . $this->request->getVar('first-name', FILTER_SANITIZE_STRING) . "<br>"
                    . 'Last Name: ' . $this->request->getVar('last-name', FILTER_SANITIZE_STRING) . "<br>"
                    . 'Email: ' . $this->request->getVar('email', FILTER_SANITIZE_EMAIL) . "<br>"
                    . 'Phone: ' . (int) $this->request->getVar('phone', FILTER_SANITIZE_NUMBER_INT) . "<br>"
                    . 'Subject: ' . $this->request->getVar('subject', FILTER_SANITIZE_EMAIL) . "<br>"
                    . 'Message: ' . $this->request->getVar('message', FILTER_SANITIZE_STRING) . "<br>"
                    . 'Thanks,<br>Team.';

                $this->email->setTo($to);
                $this->email->setFrom('no-reply@msg-homes.com', 'Inquire from Website');
                $this->email->setSubject($subject);
                $this->email->setMessage($message);
                $this->email->setMailType('html');

                $emailSent = $this->email->send();
                
                
                //Contact Model
                $status = $this->contactModel->saveData($cdata);
                if($status && $emailSent)
                {
                    $to = $this->request->getVar('email', FILTER_SANITIZE_EMAIL);
                    $subject = 'Confirmation: Your Message has been Received';
        
                    $message = 'Dear ' . $this->request->getVar('first-name', FILTER_SANITIZE_STRING) . ",<br><br>"
                        . 'We have successfully received your message. Here are the details:<br><br>'
                        . 'Phone: ' . (int) $this->request->getVar('phone', FILTER_SANITIZE_NUMBER_INT) . "<br>"
                        . 'Subject: ' . $this->request->getVar('subject') . "<br>"
                        . 'Message: ' . $this->request->getVar('message') . "<br><br>"
                        . 'Thanks,<br>My Saving Grace Realty Development & Corporation.';
        
                    $this->email->setTo($to);
                    $this->email->setFrom('no-reply@msg-homes.com', 'Inquire from Website');
                    $this->email->setSubject($subject);
                    $this->email->setMessage($message);
                    $this->email->setMailType('html');
        
                    $emailSent = $this->email->send();

                    $session->setTempdata('success', 'Thanks, We will get back to you soon', 3);
                    return redirect()->to(base_url());
                }
                else
                {
                    $session->setTempdata('error', 'Sorry Try Again', 3);
                    return redirect()->to(base_url());
                }

            }
            else
            {
                $data['validation'] = $this->validator;
            }
        }
        else
        {
            
        }
        
    }
}