<?php

namespace App\Controllers\Admin;

use \CodeIgniter\Controller;
use App\Models\Admin\AdminDashboardModel;
use App\Models\Admin\TotalViewModel;

class DashboardDetails extends Controller
{
    protected $dModel;
    protected $tvModel;
    public function __construct()
    {
        $this->dModel = new AdminDashboardModel;
        $this->tvModel = new TotalViewModel;
    }

    public function totalviews()
    {
        if(!session()->has('logged_user'))
        {
            return redirect()->to(base_url());
        }
        $username = session()->get('logged_user'); //getting the email to set in session
        $data['userdata'] = $this->dModel->getLoggedInUserData($username);
        // var_dump($username);

        $perPage = $this->request->getGet('list_length') ?? session()->get('perPage', 10);

        $data['page'] = (int) ($this->request->getGet('page') ?? 1);
        $data['perPage'] = $perPage;
        $data['total'] = $this->tvModel->countAll();
        $data['totalviewers'] = $this->tvModel->paginate(($data['perPage']));
        
        $data['pager'] = $this->tvModel->pager;

        return view('admin/dashboard_details/totalviews', $data);
    }
}