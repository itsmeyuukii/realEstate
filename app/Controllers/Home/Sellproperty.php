<?php

namespace App\Controllers\Home;

use CodeIgniter\Controller;
use App\Models\SellModel;

class Sellproperty extends Controller
{
    protected $sModel;
    protected $session;
    protected $email; // need to define email
    public function __construct()
    {
        $this->sModel = new SellModel();
        helper('form');
        helper("google");
        $this->googleClient = instantiateGoogleClient();
        $this->session = \Config\Services::session();
        $this->email = \Config\Services::email(); // to call Service email
    }
    public function index()
    {

        if($this->request->getMethod() == 'post')
        {
            $sellData = [
            'type' => $this->request->getVar('type'),
            'title' => $this->request->getVar('title'),
            'class' => $this->request->getVar('class'),
            'address' => $this->request->getVar('address'),
            'maps' => $this->request->getVar('maps'),
            'floor_area' => $this->request->getVar('floor_area'),
            'lot_area' => $this->request->getVar('lot_area'),
            'full_name' => $this->request->getVar('full_name'),
            'phone' => $this->request->getVar('phone'),
            'email' => $this->request->getVar('email'),
            ];

            try{
                $insertSuccess = $this->sModel->insert($sellData);
            }catch (\Exception $e) {
                $this->logger->error('Error inserting images into the database: ' . $e->getMessage());
                session()->setTempdata('error', 'Inquiry does not send', 3);
                return redirect()->to(current_url());
            }
            if($insertSuccess)
                {
                    $to = 'info@msg-homes.com';
                    $subject = 'Sell my property Inquiry'; // Assuming you have a property_name field

                    $message = 'New inquiry :<br><br>'
                        . 'Email: ' . $this->request->getVar('email') . "<br>"
                        . 'Full Name: ' . $this->request->getVar('full_name') . "<br>"
                        . 'Address: ' . $this->request->getVar('address') . "<br>"
                        . 'Phone: ' . $this->request->getVar('phone') . "<br>"
                        . 'Property Type: ' . $this->request->getVar('type') . "<br>"
                        . 'Property Class: ' . $this->request->getVar('class') . "<br>"

                        . 'Maps: ' . $this->request->getVar('maps') . "<br>"
                        . 'Floor Area: ' . $this->request->getVar('floor_area') . "<br>"
                        . 'Lot Area: ' . $this->request->getVar('lot_area') . "<br>"
                        . 'Title Status: ' . $this->request->getVar('title') . "<br>"
                        
                        . 'Thanks,<br>Team.';

                    $this->email->setTo($to);
                    $this->email->setFrom('no-reply@msg-homes.com', 'Inquire from Website');
                    $this->email->setSubject($subject);
                    $this->email->setMessage($message);
                    $this->email->setMailType('html');

                    if ($this->email->send()) {
                        // Handle success
                        $to = $this->request->getVar('email');
                        $subject = 'Confirmation: Your Message has been Received';

                        $message = 'Dear ' . $this->request->getVar('full_name') . ",<br><br>"
                            . 'We have successfully received your message.<br><br>'
                            . 'Our team will get back to you as soon as possible. In the meantime, if you have any urgent inquiries, feel free to contact us directly at info@msg-homes.com.<br>'
                            . 'Thanks,<br>My Saving Grace Realty Development & Corporation.';

                        $this->email->setTo($to);
                        $this->email->setFrom('no-reply@msg-homes.com', 'Inquire from Website');
                        $this->email->setSubject($subject);
                        $this->email->setMessage($message);
                        $this->email->setMailType('html');

                        $emailSent = $this->email->send();
                        session()->setFlashdata('success', 'Inquiry sent successfully');
                        return redirect()->to(current_url());
                    } else {
                        session()->setFlashdata('error', 'Something wrong');
                        return redirect()->to(current_url());
                    }

                }
        }
        $data['googleButton'] = generateGoogleButton($this->googleClient);
        $data['is_logged_in'] = $this->session->get('logged_user') ? true : false;

        return view('home/sell_property_view', $data);
    }
}