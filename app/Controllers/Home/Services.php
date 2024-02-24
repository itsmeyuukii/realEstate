<?php

namespace App\Controllers\Home;

use CodeIgniter\Controller;
use App\Models\HomeModel;
use App\Models\PropertyModel;

class Services extends Controller
{
    protected $hModel;
    protected $pModel;
    protected $session;
    public function __construct()
    {
        $this->hModel = new HomeModel;
        $this->pModel = new PropertyModel;
        helper('form');
        helper("google");
        $this->googleClient = instantiateGoogleClient();
        $this->session = \Config\Services::session();
    }
    public function index()
    {
        $pageId = 2;
        $data[] = null;
        $data['page_title'] = $this->hModel->getPageTitle($pageId);
        $data['googleButton'] = generateGoogleButton($this->googleClient);
        $data['is_logged_in'] = $this->session->get('logged_user') ? true : false;

        return view("home/v_services", $data);
    }
    
}