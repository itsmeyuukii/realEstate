<?php

namespace App\Controllers\Admin;

use \CodeIgniter\Controller;
use App\Models\Admin\AdminRegisterModel;
use App\Models\HomeModel;
use App\Models\Admin\AdminDashboardModel;

class Adminregister extends Controller
{
    protected $dModel;
    protected $rModel;// need to define registermodel
    protected $session;// need to define session
    protected $email; // need to define email
    protected $homeModel;
    public function __construct()
    {
        helper("form"); //this is helper for form
        helper("date"); //this is helper for date use by verifyExpiryTime
        $this->rModel = new AdminRegisterModel(); // to call the model
        $this->session = \Config\Services::session(); //to call service session
        $this->dModel = new AdminDashboardModel();
        $this->homeModel = new HomeModel;
    }
    public function index()
    {
        // Check if the user is logged in
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
        $data['logged_username'] = $logged_username;
        $data['adminLevel'] = $adminLevel['level'];
        $perPage = $this->request->getGet('list_length') ?? session()->get('perPage', 10);

        $data['page'] = (int) ($this->request->getGet('page') ?? 1);
        $data['perPage'] = $perPage;
        $data['total'] = $this->rModel->countAll();
        $data['admins'] = $this->rModel->paginate(($data['perPage']));
        
        $data['pager'] = $this->rModel->pager;
        $data['userdata'] = $this->dModel->getLoggedInUserData($logged_username);
        return view("admin/v_adminlist", $data);
    }

    public function addAdmin()
    {
        // Check if the user is logged in
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
        
        $data = [];
        $page_id = 1;
        $data['page_title'] = $this->homeModel->getPageTitle($page_id);
        $data['validation'] = null;
        $email = $this->request->getVar('email');
        $username = $this->request->getVar('username');

            //getting the value from form_open in register_view
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'firstname' => 'required',
                'lastname' => 'required',
                'username' => 'required|min_length[4]|max_length[20]',
                'email' => 'required|valid_email',
                'password' => 'required|min_length[6]|max_length[16]',
                'level' => 'required'
            ];
                // to insert all validated rules for user database
            if ($this->validate($rules)) {
                if($this->rModel->isUniqueEmail($email) && $this->rModel->isUniqueUsername($username))
                {
                    $userdata = [
                        'firstname' => $this->request->getVar('firstname', FILTER_SANITIZE_STRING),
                        'lastname' => $this->request->getVar('lastname', FILTER_SANITIZE_STRING),
                        'username' => $this->request->getVar('username', FILTER_SANITIZE_STRING),
                        'email' => $this->request->getVar('email'),
                        'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                        'level' => $this->request->getVar('level')
                    ];
                        // to send email from gmail account change the value if needed
                    if ($this->rModel->insert($userdata))
                    {
                        //to set templatet success variable to temporary session that is set to expire after 3 seconds
                        $this->session->setTempdata('success', 'Account Created Successfully', 3);
                    }
                    else
                    {
                        $this->session->setTempdata('error', 'Account Not Createdt', 3);
                    }
                }
                else
                {
                    $this->session->setTempdata('error', 'User Name or Email is already exist', 3);
                }
            } else {
                $data['validation'] = $this->validator;
            }
        }
        $data['userdata'] = $this->dModel->getLoggedInUserData($logged_username);
        return view("admin/v_create_admin", $data);
    }
}