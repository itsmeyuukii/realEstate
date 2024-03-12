<?php

namespace App\Controllers\Admin;

use CodeIgniter\Controller;
use App\Models\Admin\AdminRegisterModel;
use App\Models\ContactModel;
use App\Models\Admin\AdminDashboardModel;

class ServicesInquiry extends Controller
{
    protected $session;
    protected $rModel;
    protected $cModel;
    protected $dModel;
    public function __construct()
    {
        helper("form");
        $this->session = \Config\Services::session(); //to call service session
        $this->rModel = new AdminRegisterModel(); // to call the model
        $this->cModel = new ContactModel(); // to call the model
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
        if($adminLevel['level'] != 1)
        {
            return redirect()->to(base_url('unauthorized'));
        }
         //pagination setup
         $data[] = null;
         $perPage = $this->request->getGet('list_length') ?? session()->get('perPage', 10);
 
         $data['page'] = (int) ($this->request->getGet('page') ?? 1);
         $data['perPage'] = $perPage;
         $data['total'] = $this->cModel->countAll();
         $data['inquiries'] = $this->cModel->paginate(($data['perPage']));
         
         $data['pager'] = $this->cModel->pager;
         $data['userdata'] = $this->dModel->getLoggedInUserData($logged_username);
         return view("admin/service/v_serviceinquirylist", $data);
    }
    public function viewInquiry($id)
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

        $inquiry = $this->cModel->where('id', $id)->get()->getRowArray();

        $data['inquiry'] = $inquiry;
        $data['userdata'] = $this->dModel->getLoggedInUserData($logged_username);
        return view("admin/service/v_service_detail", $data);
    }
    function deleteInquiry($id)
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

        $inquiry = $this->cModel->where('id', $id)->delete();
        if($inquiry)
        {
            return redirect()->to(base_url('admin/inquiries'));
        }
        else
        {
            session()->setTempdata('error', 'Something went wrong');
        }
    }
}