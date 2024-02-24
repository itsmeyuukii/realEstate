<?php

namespace App\Controllers\Admin;

use App\Models\Admin\AdminDashboardModel;
use App\Models\Admin\AdminRegisterModel;
use App\Models\PropertyInquiryModel;
use CodeIgniter\Controller;

class PropertyInquiry extends Controller
{
    protected $pIModel;
    protected $rModel;
    protected $dModel;
    protected $session;
    public function __construct()
    {
        helper("form");
        $this->pIModel = new PropertyInquiryModel();
        $this->rModel = new AdminRegisterModel();
        $this->dModel = new AdminDashboardModel();
        $this->session = \Config\Services::session();
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
         $data['total'] = $this->pIModel->countAll();
         $data['inquiries'] = $this->pIModel->paginate(($data['perPage']));
         
         $data['pager'] = $this->pIModel->pager;
         $data['userdata'] = $this->dModel->getLoggedInUserData($logged_username);

        return view("admin/property_inquiry/property_inquiry_view", $data);
    }
    public function viewInquiry($id)
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
        
        $inquiry = $this->pIModel->where('id', $id)->get()->getRowArray();

        $data['inquiry'] = $inquiry;
        $data['userdata'] = $this->dModel->getLoggedInUserData($logged_username);

        return view("admin/property_inquiry/property_inquiry_view_detail", $data);
    }
    public function deleteInquiry($id)
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
        
        $inquiry = $this->pIModel->where('id', $id)->delete();
        if($inquiry)
        {
            return redirect()->to(current_url());
        }
        else
        {
            session()->setTempdata('error', 'Property Not Created');
        }
    }
}