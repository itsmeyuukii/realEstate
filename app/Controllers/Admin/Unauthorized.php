<?php

namespace App\Controllers\Admin;

use CodeIgniter\Controller;
use App\Models\Admin\AdminDashboardModel;

use App\Models\Admin\AdminRegisterModel;

class Unauthorized extends Controller
{
    protected $dModel;
    protected $session;
    public function __construct()
    {
        $this->dModel = new AdminDashboardModel();
        $this->rModel = new AdminRegisterModel;
        helper('form');
        helper("google");
        $this->session = \Config\Services::session();

        $this->googleClient = instantiateGoogleClient();
    }
    public function index()
    {
        $logged_username = $this->session->get('logged_user');
        $data['userdata'] = $this->dModel->getLoggedInUserData($logged_username);
        return view('errors/unauthorized/unauthorized', $data);
    }
    public function noProperty()
    {
        $data['googleButton'] = generateGoogleButton($this->googleClient);
        $data['is_logged_in'] = $this->session->get('logged_user') ? true : false;

        return view('errors/unauthorized/property_not_available', $data);
    }
    public function show404()
    {
        $data['googleButton'] = generateGoogleButton($this->googleClient);
        $data['is_logged_in'] = $this->session->get('logged_user') ? true : false;

        return view('errors/unauthorized/404', $data);
    }
}