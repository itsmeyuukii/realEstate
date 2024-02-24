<?php

namespace App\Controllers\Cms;

use CodeIgniter\Controller;
use App\Models\EmployeeModel;
use App\Models\Admin\AdminRegisterModel;
use App\Models\Admin\AdminDashboardModel;

class AboutUs extends Controller
{
    protected $eModel;
    protected $rModel;
    protected $session;
    protected $dModel;
    public function __construct()
    {
        $this->eModel = new EmployeeModel;
        $this->rModel = new AdminRegisterModel;
        $this->dModel = new AdminDashboardModel();
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
        $data['total'] = $this->eModel->countAll();
        $data['employees'] = $this->eModel->paginate(($data['perPage']));
        
        $data['pager'] = $this->eModel->pager;
        $data['userdata'] = $this->dModel->getLoggedInUserData($logged_username);
        return view("cms/about/v_ourPeople", $data);
    }
    public function addEmployee()
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
                'name' => 'required',
                'position' => 'required',
                'description' => 'required',
                'employeeImage' => 'uploaded[employeeImage]|mime_in[employeeImage,image/jpg,image/jpeg,image/png,image/gif]|max_size[employeeImage,1024]',
            ];

            if ($this->validate($validationRules)) {
                // Handle image upload
                $image = $this->request->getFile('employeeImage');
                $imageName = $image->getRandomName();
                $image->move('public/uploads/employees_images', $imageName);

                $data = [
                    'name' => $this->request->getPost('name'),
                    'position' => $this->request->getPost('position'),
                    'description' => $this->request->getPost('description'),
                    'image_path' => 'public/uploads/employees_images/' . $imageName,
                ];
                $this->eModel->insert($data);

                return redirect()->to(site_url('cms/aboutus'))->with('success', 'Employee added successfully');
            } else {
                // Validation failed, show errors
                $data['validation'] = $this->validator;
            }
        }
        $data['userdata'] = $this->dModel->getLoggedInUserData($logged_username);
        return view("cms/about/v_addOurPeople", $data);
            
    }

    public function updateEmployee($id)
    {
        // Check if there's a logged user
        if (!$this->session->get('logged_user')) {
            return redirect()->to(base_url());
        }
        
        // Check if the user is logged in
        $logged_username = $this->session->get('logged_user');
        $adminLevel = $this->rModel->where('username', $logged_username)->first();
        
        // Check level of security
        if (!in_array($adminLevel['level'], [1, 2])) {
            return redirect()->to(base_url('unauthorized'));
        }

        $employee = $this->eModel->find($id);
        $data['employee'] = $employee;
        $data['imagePath'] = base_url();

        if ($this->request->getMethod() === 'post') {
            $validationRules = [
                'name' => 'required',
                'position' => 'required',
                'description' => 'required',
                'employeeImage' => 'mime_in[employeeImage,image/jpg,image/jpeg,image/png,image/gif]|max_size[employeeImage,1024]',
            ];

            if ($this->validate($validationRules)) {
                // Check if a new image is uploaded
                $image = $this->request->getFile('employeeImage');
                if ($image->isValid() && !$image->hasMoved()) {
                    // Move the new image to the desired folder
                    $imageName = $image->getRandomName();
                    $image->move('public/uploads/employees_images', $imageName);

                    // If there's an existing image, unlink it
                    if (!empty($employee['image_path'])) {
                        unlink($employee['image_path']);
                    }

                    // Update the image path in the database
                    $data['image_path'] = 'public/uploads/employees_images/' . $imageName;
                }

                // Update other fields
                $data['name'] = $this->request->getPost('name');
                $data['position'] = $this->request->getPost('position');
                $data['description'] = $this->request->getPost('description');

                // Update the employee data
                $this->eModel->update($id, $data);

                return redirect()->to(site_url('cms/aboutus/employeelist'))->with('success', 'Employee updated successfully');
            } else {
                // Validation failed, show errors
                $data['validation'] = $this->validator;
            }
        }

        // Load the edit view with the existing data
        $data['userdata'] = $this->dModel->getLoggedInUserData($logged_username);
        return view("cms/about/v_updateOurPeople", $data);
    }


    public function deleteImage()
    {
        $existingImage = $this->request->getPost('existingImage');
    
        // Find and store to variable the employee with the given image path
        $employee = $this->eModel->where('image_path', $existingImage)->first();
    
        if ($employee) {
            // Update the image path to null
            $this->eModel->update($employee['id'], ['image_path' => null]);
    
            // Check if the file exists before attempting to unlink it
            if (file_exists($existingImage)) {
                unlink($existingImage);
            }
    
            return $this->response->setStatusCode(200)->setJSON(['message' => 'Image path cleared successfully']);
        } else {
            return $this->response->setStatusCode(404)->setJSON(['error' => $existingImage . ' Image not found']);
        }
    }
    
}