<?php

namespace App\Controllers\Home;

use CodeIgniter\Controller;
use App\Models\HomeModel;
use App\Models\PropertyModel;

class Services extends Controller
{
    protected $hModel;
    protected $pModel;
    public function __construct()
    {
        $this->hModel = new HomeModel;
        $this->pModel = new PropertyModel;
        helper('form');
    }
    public function index()
    {
        $pageId = 2;
        $data[] = null;
        $data['page_title'] = $this->hModel->getPageTitle($pageId);

        return view("home/v_services", $data);
    }
}