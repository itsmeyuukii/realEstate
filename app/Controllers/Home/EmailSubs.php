<?php

namespace App\Controllers\Home;

use App\Models\EmailsubsModel;
use CodeIgniter\Controller;

class EmailSubs extends Controller
{
    protected $eModel;
    protected $email;
    public function __construct()
    {
        $this->eModel = new EmailsubsModel();
        helper('form');
        $this->email = \Config\Services::email(); // to call Service email
    }
    public function index()
    {
        if($this->request->getMethod() == 'post')
        {
            $emailSubs = $this->request->getVar('subsEmail',FILTER_SANITIZE_EMAIL);
            $userdata = [
                'email' => $emailSubs
            ];
            $isALreadyExist = $this->eModel->where('email', $emailSubs)
                                            ->first();
            if ($isALreadyExist === null)
            {
                $this->eModel->insert($userdata);
                $to = $emailSubs;
                $subject = 'You Have Succesfully Subscribe to My Saving Grace Realty'; // Assuming you have a property_name field

                $message = 'Thank you for reaching out to us. We have received your message and will review it shortly. Our team will get back to you as soon as possible.<br><br>
                
                In the meantime, if you have any urgent inquiries, feel free to contact us directly at info@msg-homes.com.<br><br>
                
                Thank you for your patience and interest in My Saving Grace Realty.
                
                Best regards,
                MSG-homes Team.';

                $this->email->setTo($to);
                $this->email->setFrom('no-reply@msg-homes.com', 'My Saving Grace Newsletter!');
                $this->email->setSubject($subject);
                $this->email->setMessage($message);
                $this->email->setMailType('html');
                $this->email->send();
                return redirect()->to(site_url());
            }
            else
            {
                $this->eModel->update($isALreadyExist['id'],$userdata);
                $to = $emailSubs;
                $subject = 'You Have Succesfully Subscribe to My Saving Grace Realty'; // Assuming you have a property_name field

                $message = 'Thank you for reaching out to us. We have received your message and will review it shortly. Our team will get back to you as soon as possible.<br><br>
                
                In the meantime, if you have any urgent inquiries, feel free to contact us directly at info@msg-homes.com.<br><br>
                
                Thank you for your patience and interest in My Saving Grace Realty.
                
                Best regards,
                MSG-homes Team.';

                $this->email->setTo($to);
                $this->email->setFrom('no-reply@msg-homes.com', 'My Saving Grace Newsletter');
                $this->email->setSubject($subject);
                $this->email->setMessage($message);
                $this->email->setMailType('html');
                $this->email->send();
                return redirect()->to(site_url());
            }
        }
    }
}