<?php

namespace App\Controllers\Admin;

use CodeIgniter\Controller;
use App\Models\ReviewModel;
use App\Models\Admin\AdminDashboardModel;
use App\Models\Admin\AdminRegisterModel;

class Review extends Controller
{
    protected $revModel;
    protected $session;
    protected $rModel;
    protected $dModel;

    public function __construct()
    {
        $this->revModel = new ReviewModel();
        $this->session = \Config\Services::session();
        $this->rModel = new AdminRegisterModel();
        $this->dModel = new AdminDashboardModel();
    }
    public function index()
    {
        $logged_username = $this->session->get('logged_user');
        $adminLevel = $this->rModel->where('username', $logged_username)->first();

        if(!$logged_username)
        {
            return redirect()->to(base_url());
        }

        if(!in_array($adminLevel['level'], [1,2]))
        {
            return redirect()->to(base_url('unauthorized'));
        }
        //pagination setup
        $data[] = null;
        $perPage = $this->request->getGet('list_length') ?? session()->get('perPage', 10);

        $data['page'] = (int) ($this->request->getGet('page') ?? 1);
        $data['perPage'] = $perPage;
        $data['total'] = $this->revModel->countAll();
        $data['reviews'] = $this->revModel->paginate(($data['perPage']));
        
        $data['pager'] = $this->revModel->pager;
        $data['userdata'] = $this->dModel->getLoggedInUserData($logged_username);
        

        return view('admin/review/review_list', $data);
    }
    public function viewReview($id)
    {
        $logged_username = $this->session->get('logged_user');
        $adminLevel = $this->rModel->where('username', $logged_username)->first();

        if(!$logged_username)
        {
            return redirect()->to(base_url());
        }
        $data['review'] = $this->revModel->where('id', $id)->get()->getRowArray();
        $data['userdata'] = $this->dModel->getLoggedInUserData($logged_username);

        return view('admin/review/review_detail', $data);
    }
}