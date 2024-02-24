<?php

namespace App\Controllers\User;

use \CodeIgniter\Controller;
use App\Models\FavouriteModel;
use App\Models\DashboardModel;

class Dashboard extends Controller
{
    protected $dModel;
    protected $fModel;
    protected $session;
    public function __construct()
    {
        helper("number");
        helper("form");
        $this->dModel = new DashboardModel;
        $this->fModel = new FavouriteModel;
        $this->session = \Config\Services::session(); //to call service session
    }
    public function index()
    {
        if(!session()->has('logged_user'))
        {
            return redirect()->to(base_url());
        }
        
        $username = session()->get('logged_user'); //getting the email to set in session

        $favorites = $this->fModel->getFavProperties($username);
        
        $data['userdata'] = $this->dModel->getLoggedInUserData($username);

        $perPage = 10;
        $currentPage = (int) ($this->request->getGet('page') ?? 1);

        // Paginate the array manually
        $startIndex = ($currentPage - 1) * $perPage;

        // to get paginated properties
        $paginatedProperties = array_slice($favorites, $startIndex, $perPage);

        // Set up CodeIgniter's built-in pager
        $pager = service('pager');

        $data['baseurl'] = base_url();
        $data['favorites'] = $paginatedProperties;
        $data['page'] = $currentPage;
        $data['perPage'] = $perPage;
        $data['total'] = count($favorites);
        $data['pager'] = $pager;

        return view('user/dashboard_view', $data);
        
    }
    public function myProfile()
    {
        if(!session()->has('logged_user'))
        {
            return redirect()->to(base_url());
        }
        
        $username = session()->get('logged_user'); //getting the email to set in session
        $data['userdata'] = $this->dModel->getLoggedInUserData($username);

        if ($this->request->getMethod() == 'post') {
            
            // File upload configuration
            $profileImg = $this->request->getFile('profile_img');
            $profileImgName = '';
            if ($profileImg->isValid() && !$profileImg->hasMoved()) {
                $newName = $profileImg->getRandomName();
                $profileImg->move(FCPATH . 'public/uploads/profile_img', $newName);
                $profileImgName = base_url() . 'public/uploads/profile_img/' . $newName;
            }
            $userdata = [
                'phone' => $this->request->getVar('phone'),
                'profile_img' => $profileImgName,
            ];
                // to send email from gmail account change the value if needed
            if ($this->dModel->updateProfile($username, $userdata))
            {
                //to set templatet success variable to temporary session that is set to expire after 3 seconds
                $this->session->setTempdata('success', 'Account Created Successfully', 3);
            }
            else
            {
                $this->session->setTempdata('error', 'Account Not Createdt', 3);
            }
        }

        return view('user/myprofile_view', $data);
    }

    public function logout()
    {   
        if(session()->has('logged_info'))
        {
            $la_id = session()->get('logged_info');
            $this->dModel->updateLogoutTime($la_id);
        }

        session()->remove('logged_user');
        session()->remove('AccessTokens');
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