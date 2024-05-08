<?php

namespace App\Controllers\Cms;

use CodeIgniter\Controller;
use App\Models\CareerModel;
use App\Models\Admin\AdminRegisterModel;
use App\Models\Admin\AdminDashboardModel;

class Careers extends Controller
{
    protected $careerModel;
    protected $rModel;
    protected $session;
    protected $dModel;

    public function __construct()
    {
        $this->careerModel = new CareerModel();
        $this->rModel = new AdminRegisterModel();
        $this->dModel = new AdminDashboardModel();
        $this->session = \Config\Services::session();
        helper('form');
        helper('text');
    }

    public function index()
    {
        //check if theres a logged user
        if (!$this->session->get('logged_user')) {
            return redirect()->to(base_url());
        }
        // Check if the user is logged in
        $logged_username = $this->session->get('logged_user');

        $data['userdata'] = $this->dModel->getLoggedInUserData($logged_username);
        $adminLevel = $this->rModel->where('username', $logged_username)->first();
        
        //check level of security
        if(!in_array($adminLevel['level'], [1, 2]) )
        {
            return redirect()->to(base_url('unauthorized'));
        }

        // Set up pagination
        $data[] = null;
        $perPage = $this->request->getGet('list_length') ?? session()->get('perPage', 10);

        $data['page'] = (int) ($this->request->getGet('page') ?? 1);
        $data['perPage'] = $perPage;
        $data['total'] = $this->careerModel->countAll();
        $data['careers'] = $this->careerModel->paginate(($data['perPage']));
        
        $data['pager'] = $this->careerModel->pager;
        
        return view('cms/careers/v_career_list', $data);
    }
    public function addCareer()
    {
        
        //check if theres a logged user
        if (!$this->session->get('logged_user')) {
            return redirect()->to(base_url());
        }
        // Check if the user is logged in
        $logged_username = $this->session->get('logged_user');
        
        $adminLevel = $this->rModel->where('username', $logged_username)->first();
        
        //check level of security
        if(!in_array($adminLevel['level'], [1, 2]) )
        {
            return redirect()->to(base_url('unauthorized'));
        }

        // Check if the form is submitted
        if ($this->request->getMethod() === 'post') {
            // Validate form data
            $validationRules = [
                'title' => 'required',
                'description' => 'required',
            ];

            if ($this->validate($validationRules)) {

                $image = $this->request->getFile('careerImage');
                $imageName = $image->getRandomName();
                $image->move('public/uploads/carreer_images', $imageName);

                $data = [
                    'title' => $this->request->getPost('title'),
                    'description' => $this->request->getPost('description'),
                    'image_path' => 'public/uploads/carreer_images/' . $imageName,
                ];
                $this->bModel->insert($data);

                return redirect()->to(site_url('cms/aboutus/careers'))->with('success', 'Career added successfully');
            } else {
                // Validation failed, show errors
                $data['validation'] = $this->validator;
            }
        }
        $data['userdata'] = $this->dModel->getLoggedInUserData($logged_username);

        return view('cms/careers/v_add_career', $data);
    }
    public function editCareer($id)
    {
        //check if theres a logged user
        if (!$this->session->get('logged_user')) {
            return redirect()->to(base_url());
        }
        // Check if the user is logged in
        $logged_username = $this->session->get('logged_user');
        $data['userdata'] = $this->dModel->getLoggedInUserData($logged_username);
        $adminLevel = $this->rModel->where('username', $logged_username)->first();
        
        //check level of security
        if(!in_array($adminLevel['level'], [1, 2]) )
        {
            return redirect()->to(base_url('unauthorized'));
        }
        
        $career = $this->careerModel->find($id);
        $data['career'] = $career;
        

        if ($this->request->getMethod() === 'post') {
            $validationRules = [
                'title' => 'required',
                'description' => 'required',
            ];

            if ($this->validate($validationRules)) {
                
                $data = [
                    'title' => $this->request->getPost('title'),
                    'description' => $this->request->getPost('description'),
                ];

                $this->careerModel->update($id, $data);
        

                return redirect()->to(site_url('cms/blog/list'))->with('success', 'Careerd updated successfully');
            } else {
                // Validation failed, show errors
                $data['validation'] = $this->validator;
            }
        }

        // Load the edit view with the existing data
        return view("cms/careers/v_update_career", $data);
    }

    public function deleteCareer($id)
    {
        if (!$this->session->get('logged_user')) {
            return redirect()->to(base_url());
        }
        // Check if the user is logged in
        $logged_username = $this->session->get('logged_user');
        $data['userdata'] = $this->dModel->getLoggedInUserData($logged_username);
        $adminLevel = $this->rModel->where('username', $logged_username)->first();
        
        //check level of security
        if(!in_array($adminLevel['level'], [1, 2]) )
        {
            return redirect()->to(base_url('unauthorized'));
        }

        $deleted = $this->careerModel->delete($id);

        if($deleted)
        {
            return redirect()->to(site_url('cms/aboutus/careers'))->with('success', 'Career deleted successfully');
        }else
        {
            return redirect()->to(site_url('cms/aboutus/careers'))->with('error', 'Something Went Wrong :(');
        }

    }
}