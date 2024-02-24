<?php

namespace App\Controllers\Admin;

use CodeIgniter\Controller;
use App\Models\SellModel;
use App\Models\Admin\AdminRegisterModel;
use App\Models\Admin\AdminDashboardModel;


class SellProperty extends Controller
{
    protected $sModel;
    protected $session;
    protected $rModel;
    protected $dModel;
    public function __construct()
    {
        helper("form");
        $this->sModel = new SellModel();
        $this->session = \Config\Services::session(); //to call service session
        $this->rModel = new AdminRegisterModel(); // to call the model
        $this->dModel = new AdminDashboardModel();
    }
    public function index()
    {
        $logged_username = $this->session->get('logged_user');
        $adminLevel = $this->rModel->where('username', $logged_username)->first();
        
        if (!$logged_username) {
            return redirect()->to(base_url());
        }
        //check level of security
        if(!in_array($adminLevel['level'], [1, 2]))
        {
            return redirect()->to(base_url('unauthorized'));
        }
         //pagination setup
         $data[] = null;
         $perPage = $this->request->getGet('list_length') ?? session()->get('perPage', 10);
 
         $data['page'] = (int) ($this->request->getGet('page') ?? 1);
         $data['perPage'] = $perPage;
         $data['total'] = $this->sModel->countAll();
         $data['sellers'] = $this->sModel->paginate(($data['perPage']));
         
         $data['pager'] = $this->sModel->pager;
         $data['userdata'] = $this->dModel->getLoggedInUserData($logged_username);

        return view("admin/sellproperty/sell_property_view", $data);
    }
    public function viewSeller($id)
    {
        $logged_username = $this->session->get('logged_user');
        $adminLevel = $this->rModel->where('username', $logged_username)->first();
        
        if (!$logged_username) {
            return redirect()->to(base_url());
        }
        //check level of security
        if($adminLevel['level'] != 1)
        {
            return redirect()->to(base_url('unauthorized'));
        }
        
        $sellerData = $this->sModel->where('id', $id)->get()->getRowArray();

        $data['sellerData'] = $sellerData;
        

        return view("admin/sellproperty/sell_property_view_detail", $data);
    }
    public function deleteSeller($id)
    {
        $logged_username = $this->session->get('logged_user');
        $adminLevel = $this->rModel->where('username', $logged_username)->first();
        
        if (!$logged_username) {
            return redirect()->to(base_url());
        }
        //check level of security
        if($adminLevel['level'] != 1)
        {
            return redirect()->to(base_url('unauthorized'));
        }
        
        $sellerData = $this->sModel->where('id', $id)->delete();
        if($sellerData)
        {
            return redirect()->to(current_url());
        }
        else
        {
            session()->setTempdata('error', 'Property Not Created');
        }
    }
}