<?php

namespace App\Controllers\Home;

use CodeIgniter\Controller;
use App\Models\ReviewModel;

class Review extends Controller
{
    protected $session;
    protected $revModel;

    public function __construct()
    {
        $this->revModel =  new ReviewModel();
        $this->session = \Config\Services::session();
        $this->logger = \Config\Services::logger();
        helper('form');
        helper('google');
        $this->googleClient = instantiateGoogleClient();
    }
    public function index()
    {
        if($this->request->getMethod() == 'post')
        {
            $reviewData = [
                'name' => $this->request->getVar('name'),
                'agent' => $this->request->getVar('agent'),
                'review' => $this->request->getVar('review')
            ];
            try {
                $insertSuccess = $this->revModel->insert($reviewData);
            } catch (\Exception $e) {
                $this->logger->error('Error Inserting Review Data: ' . $e->getMessage());
                session()->setTempdata('error', 'Review does not send', 3);
                return redirect()->to(current_url());
            }
        }

        $data['googleButton'] = generateGoogleButton($this->googleClient);
        $data['is_logged_in'] = $this->session->get('logged_user') ? true : false;
        return view('home/v_review', $data);
    }
}