<?php

namespace App\Controllers\Admin;

use \CodeIgniter\Controller;
use App\Models\Admin\AdminDashboardModel;

class Dashboard extends Controller
{
    public $dModel;
    public function __construct()
    {
        $this->dModel = new AdminDashboardModel;
    }
    public function index()
    {
        if(!session()->has('logged_user'))
        {
            return redirect()->to(base_url());
        }
        $username = session()->get('logged_user'); //getting the email to set in session

        // $userdata = $this->dModel->getLoggedInUserData($email); // get the email to transfer to model
        
        $data['total_properties'] = $this->dModel->countAllProperties();
        $data['total_favorites'] = $this->dModel->countAllFavourites();
        $data['total_inquiries'] = $this->dModel->countAllInquiries();
        $data['total_views'] = $this->dModel->countAllViews();

        
        $data['userdata'] = $this->dModel->getLoggedInUserData($username);

        return view('admin/dashboard_view', $data);
        
        
    }

    public function logout()
    {   
        if(session()->has('logged_info'))
        {
            $la_id = session()->get('logged_info');
            $this->dModel->updateLogoutTime($la_id);
        }

        session()->remove('logged_user');
        session()->destroy();

        return redirect()->to(base_url());
    }

    public function login_activity()
    {
        if (!session()->has('logged_user')) {
            return redirect()->to(base_url());
        }
        $loggedUser = session()->get('logged_user');

    
        $data['userdata'] = $this->dModel->getLoggedInUserData($loggedUser);
        $data['login_info'] = $this->dModel->getLoginUserInfo($loggedUser);
    
        return view('login_activity_view', $data);
    }
    // TODO transfer this to new controller
    public function login_activity_all()
    {
        if (!session()->has('logged_user')) {
            return redirect()->to(base_url());
        }
        
        $data['login_info'] = $this->dModel->getLoginAdminInfo();
    
        return view('admin/v_login_admin_activity', $data);
    }
}