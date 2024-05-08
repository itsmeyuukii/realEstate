<?php

namespace App\Controllers\Admin;

use App\Models\Admin\TotalViewModel;
use \CodeIgniter\Controller;
use App\Models\Admin\AdminDashboardModel;

class Dashboard extends Controller
{
    protected $dModel;
    protected $tvModel;
    public function __construct()
    {
        $this->dModel = new AdminDashboardModel;
        $this->tvModel = new TotalViewModel;
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
        $data['monthlyViews'] = $this->prepareMonthlyViewsData();
        $data['monthsArray'] = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

        return view('admin/dashboard_view', $data); 
    }
    private function prepareMonthlyViewsData()
    {
        $monthlyData = $this->tvModel->getTotalViewsByMonth();
        $monthlyViews = array_fill(0, 12, 0); // Initialize all months to 0 views

        // Populate the data for each month from the database results
        foreach ($monthlyData as $data) {
            $index = (int) $data['month'] - 1; // Convert month to zero-index
            $monthlyViews[$index] = (int) $data['total_views'];
        }

        return $monthlyViews;
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