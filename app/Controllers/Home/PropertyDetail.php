<?php

namespace App\Controllers\Home;

use CodeIgniter\Controller;
use App\Models\HomeModel;
use App\Models\PropertyModel;

class PropertyDetail extends Controller
{
    protected $hModel;
    protected $pModel;
    public function __construct()
    {
        helper("form");
        $this->hModel = new HomeModel();
        $this->pModel = new PropertyModel();
    }
    public function index($id)
    {
        // Get Property Data by ID
        $data['properties'] = $this->pModel->getPropertyListsById($id);
        //Image links
        $getPCode = $data['properties']->p_code;
        $pCode = $this->pModel->getImagesByPropertyCode($getPCode);
        $data['images'] = $pCode;

        return view("home/v_property_detail" , $data);
    }
}



