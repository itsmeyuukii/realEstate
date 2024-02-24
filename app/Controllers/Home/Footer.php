<?php

namespace App\Controllers\Home;

use \CodeIgniter\Controller;
use App\Models\TermsPrivacyModel;


class Footer extends Controller
{
    protected $googleClient;
    protected $session;
    protected $tpModel;
    public function __construct()
    {
        $this->tpModel = new TermsPrivacyModel;  
        helper('form');
        helper('google');
        $this->googleClient = instantiateGoogleClient();
        $this->session = \Config\Services::session();
    }
    public function privacyPolicy()
    {
        $data['pageContent'] = $this->tpModel->where('slug', 'privacy-policy')->get()->getRowArray(); 

        $data['googleButton'] = generateGoogleButton($this->googleClient);
        $data['is_logged_in'] = $this->session->get('logged_user') ? true : false;

        return view ("home/v_privacy_policy", $data);
    }
}