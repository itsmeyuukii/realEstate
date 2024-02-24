<?php

namespace App\Controllers\Cms;

use \CodeIgniter\Controller;
use App\Models\TermsPrivacyModel;
use App\Models\Admin\AdminRegisterModel;
use App\Models\Admin\AdminDashboardModel;


class TermsPolicy extends Controller
{
    protected $rModel;
    protected $tpModel;
    protected $session;
    protected $dModel;
    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->rModel = new AdminRegisterModel();
        $this->dModel = new AdminDashboardModel();
        $this->tpModel = new TermsPrivacyModel();
        helper('form');
    }
    
    public function index()
    {
        // Check if there's a logged user
        if (!$this->session->get('logged_user')) {
            return redirect()->to(base_url());
        }

        // Check if the user is logged in
        $logged_username = $this->session->get('logged_user');
        $adminLevel = $this->rModel->where('username', $logged_username)->first();
        
        // Set up pagination
        $data['perPage'] = $this->request->getGet('property-list_length') ?? session()->get('perPage', 10);

         // Get search keyword from the input
         $keyword = $this->request->getGet('keyword');

         // If there is a search keyword, perform the search
         if (!empty($keyword) && strlen($keyword) >= 4) {
             $searchResults = $this->tpModel->searchPages($keyword, $data['perPage']);
             $data['contentpages'] = $searchResults['pagedResult'];
             $data['total'] = $searchResults['totalResults'];
             $data['page'] = (int) ($this->request->getGet('page') ?? 1);
         } else {
             // If no search keyword, paginate all properties
             $data['contentpages'] = $this->tpModel->paginate($data['perPage']);
             $data['page'] = (int) ($this->request->getGet('page') ?? 1);
             $data['total'] = $this->tpModel->countAll();
         }
         
         $data['request'] = $this->request;
 
         $data['pager'] = $this->tpModel->pager;
         $data['userdata'] = $this->dModel->getLoggedInUserData($logged_username);

        return view('cms/pages/v_page_list', $data);
    }
    public function editPage($id)
    {
        // Check if there's a logged user
        if (!$this->session->get('logged_user')) {
            return redirect()->to(base_url());
        }
        // Check if the user is logged in
        $logged_username = $this->session->get('logged_user');
        $adminLevel = $this->rModel->where('username', $logged_username)->first();


        if($this->request->getMethod() == "post")
        {
            $contentData = [
                "page_title" => filter_var($this->request->getVar('page_title'), FILTER_SANITIZE_STRING),
                "is_display" => filter_var($this->request->getVar('is_display'), FILTER_SANITIZE_STRING),
                "slug" => filter_var($this->request->getVar('slug'), FILTER_SANITIZE_STRING),
                "meta_key" => filter_var($this->request->getVar('meta_key'), FILTER_SANITIZE_STRING),
                "meta_description" => filter_var($this->request->getVar('meta_description'), FILTER_SANITIZE_STRING),
                // Content may contain emojis, so we don't filter it
                "content" => $this->request->getVar('content')

            ];

            // echo '<pre>';
            // var_dump($contentData);
            // echo '</pre>';
            // die;

            if($this->tpModel->updateContentPage($id, $contentData))
            {
                return redirect()->to(base_url('cms/pagelist'));
            }
        }

        $data['pageContent'] = $this->tpModel->where('id', $id)->get()->getRowArray();
        $data['userdata'] = $this->dModel->getLoggedInUserData($logged_username);
        return view('cms/pages/v_page_edit', $data);
    }
    public function addPage()
    {
        // Check if there's a logged user
        if (!$this->session->get('logged_user')) {
            return redirect()->to(base_url());
        }
        // Check if the user is logged in
        $logged_username = $this->session->get('logged_user');
        $adminLevel = $this->rModel->where('username', $logged_username)->first();


        if($this->request->getMethod() == "post")
        {
            $contentData = [
                "page_title" => filter_var($this->request->getVar('page_title'), FILTER_SANITIZE_STRING),
                "is_display" => filter_var($this->request->getVar('is_display'), FILTER_SANITIZE_STRING),
                "slug" => filter_var($this->request->getVar('slug'), FILTER_SANITIZE_STRING),
                "meta_key" => filter_var($this->request->getVar('meta_key'), FILTER_SANITIZE_STRING),
                "meta_description" => filter_var($this->request->getVar('meta_description'), FILTER_SANITIZE_STRING),
                // Content may contain emojis, so we don't filter it
                "content" => $this->request->getVar('content')

            ];

            // echo '<pre>';
            // var_dump($contentData);
            // echo '</pre>';
            // die;

            if($this->tpModel->insert($contentData))
            {
                return redirect()->to(base_url('cms/pagelist'));
            }
        }

        $data['userdata'] = $this->dModel->getLoggedInUserData($logged_username);
        return view('cms/pages/v_page_add', $data);
    }
}

