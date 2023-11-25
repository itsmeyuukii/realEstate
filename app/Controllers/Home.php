<?php

namespace App\Controllers;
use App\Models\HomeModel;

class Home extends BaseController
{
    protected $homeModel;

    public function __construct()
    {
        helper("form");
        $this->homeModel = new HomeModel();
    }

    public function index()
    {
        $id = 1;
        $data[] = null;
        $data['page_title'] = $this->homeModel->getPageTitle($id);
        return view("homeview", $data);
    }

    
    public function welcome()
    {
        
        return view("welcome_message");
    }
    public function staging()
    {
        $data = [
            'page_title' => 'MSG-Homes | Staging',
            'page_heading' => 'Staging',
        ];
        return view("staging",$data);
    }
}
