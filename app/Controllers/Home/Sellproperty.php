<?php

namespace App\Controllers\Home;

use CodeIgniter\Controller;
use App\Models\SellModel;

class Sellproperty extends Controller
{
    protected $sModel;
    protected $session;
    public function __construct()
    {
        $this->sModel = new SellModel();
        helper('form');
        helper("google");
        $this->googleClient = instantiateGoogleClient();
        $this->session = \Config\Services::session();
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
                $this->sModel->insert($sellData);
            }catch (\Exception $e) {
                $this->logger->error('Error inserting images into the database: ' . $e->getMessage());
                session()->setTempdata('error', 'Property Not Created');
                return redirect()->to(current_url());
            }
        }
        $data['googleButton'] = generateGoogleButton($this->googleClient);
        $data['is_logged_in'] = $this->session->get('logged_user') ? true : false;

        return view('home/sell_property_view', $data);
    }
}