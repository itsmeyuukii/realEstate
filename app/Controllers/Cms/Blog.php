<?php

namespace App\Controllers\Cms;

use CodeIgniter\Controller;
use App\Models\BlogModel;
use App\Models\Admin\AdminRegisterModel;

class Blog extends Controller
{
    protected $bModel;
    protected $rModel;
    protected $session;
    public function __construct()
    {
        $this->bModel = new BlogModel;
        $this->rModel = new AdminRegisterModel;
        $this->session = \Config\Services::session();
        helper("form");
        helper("text");

    }
    public function index()
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
        // Set up pagination
        $data[] = null;
        $perPage = $this->request->getGet('list_length') ?? session()->get('perPage', 10);

        $data['page'] = (int) ($this->request->getGet('page') ?? 1);
        $data['perPage'] = $perPage;
        $data['total'] = $this->bModel->countAll();
        $data['blogs'] = $this->bModel->paginate(($data['perPage']));
        
        $data['pager'] = $this->bModel->pager;
        
        return view('cms/blog/v_bloglist', $data);
    }

    public function addBlog()
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
                'blogImage' => 'uploaded[blogImage]|mime_in[blogImage,image/jpg,image/jpeg,image/png,image/gif]|max_size[blogImage,1024]',
            ];

            if ($this->validate($validationRules)) {
                // Handle image upload
                $image = $this->request->getFile('blogImage');
                $imageName = $image->getRandomName();
                $image->move('public/uploads/blog_images', $imageName);

                $data = [
                    'title' => $this->request->getPost('title'),
                    'description' => $this->request->getPost('description'),
                    'image_path' => 'public/uploads/blog_images/' . $imageName,
                ];
                $this->bModel->insert($data);

                return redirect()->to(site_url('cms/blog/list'))->with('success', 'Blog added successfully');
            } else {
                // Validation failed, show errors
                $data['validation'] = $this->validator;
            }
        }

        return view('cms/blog/v_addblog');
    }
    public function updateBlog($id)
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
        
        $blog = $this->bModel->find($id);
        $data['blog'] = $blog;

        $data['imagePath'] = base_url();

        

        if ($this->request->getMethod() === 'post') {
            $validationRules = [
                'title' => 'required',
                'description' => 'required',
                'blogImage' => 'mime_in[blogImage,image/jpg,image/jpeg,image/png,image/gif]|max_size[blogImage,1024]',
            ];

            if ($this->validate($validationRules)) {
                
                $data = [
                    'title' => $this->request->getPost('title'),
                    'description' => $this->request->getPost('description'),
                ];

                $this->bModel->update($id, $data);
        
                // Check if a new image is uploaded
                $image = $this->request->getFile('blogImage');
                if ($image->isValid() && !$image->hasMoved()) {
                    // Upload and update the image path
                    $imageName = $image->getRandomName();
                    $image->move('public/uploads/blog_images', $imageName);
                    $data['image_path'] = 'public/uploads/blog_images/' . $imageName;
                }

                return redirect()->to(site_url('cms/blog/list'))->with('success', 'Blog updated successfully');
            } else {
                // Validation failed, show errors
                $data['validation'] = $this->validator;
            }
        }

        // Load the edit view with the existing data
        return view("cms/blog/v_updateblog", $data);
    }
}