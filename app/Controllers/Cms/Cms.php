<?php

namespace App\Controllers\Cms;

use \CodeIgniter\Controller;
use App\Models\CmsModel;

class Cms extends Controller
{
    public $cmsModel;

    public function __construct()
    {
        helper("form");
        $this->cmsModel = new CmsModel;
    }
    public function index()
    {
        if (!session()->has('logged_user')) {
            return redirect()->to(base_url());
        }
        $data = [];
        $data["tableDatas"] = $this->cmsModel->getHeadContent();
        return view("cms/cms_view", $data);
    }
    public function homeContent()
    {
        if (!session()->has('logged_user')) {
            return redirect()->to(base_url());
        }
        $data = [];
        $data["tableDatas"] = $this->cmsModel->getHeadContent();
        return view("cms/v_home_list/cms_headcontent_view", $data);
    }
    public function addHeadContent()
    {
        if (!session()->has('logged_user')) {
            return redirect()->to(base_url());
        }

        $email = session()->get('logged_user');
        $data = [];
        $data['validation'] = null;

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'title' => 'required'
            ];

            if ($this->validate($rules)) {
                // File validation passed; process the image upload and database insertion.
                $imageFile = $this->request->getFile('image');

                if ($imageFile->isValid() && !$imageFile->hasMoved()) {
                    $newName = $imageFile->getRandomName();

                    // Move the uploaded file to a designated directory.
                    if ($imageFile->move(FCPATH . 'public\contentuploads', $newName)) {
                        // echo base_url() .'public/contentuploads/'. $newName;
                        $path = base_url('public/contentuploads/') . $newName;
                        $headContent = [
                            'title' => $this->request->getVar('title', FILTER_SANITIZE_STRING),
                            'image' => $path,
                            // Store the file name in the database, not the entire file
                            'status' => $this->request->getVar('status'),
                            'author' => $email
                        ];

                        $this->cmsModel->createHeadContent($headContent);
                    } else {
                        session()->setTempdata('error', 'path problem');
                        return redirect()->to(current_url());
                    }
                } else {
                    session()->setTempdata('error', 'invalid file image', 3);
                }
            } else {
                $data['validation'] = $this->validator;
            }
        }

        return view("cms/v_home_list/add_headcontent", $data);
    }
    public function editHeadContent($id)
    {

        if (!session()->has('logged_user')) {
            return redirect()->to(base_url());
        }

        $email = session()->get('logged_user');
        $data = [];
        $data['image'] = $this->cmsModel->getHeadContentById($id);
        $data['validation'] = null;

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'title' => 'required'
            ];

            if ($this->validate($rules)) {
                // File validation passed; process the image upload and database insertion.

                $headContent = [
                    'title' => $this->request->getVar('title', FILTER_SANITIZE_STRING),
                    'status' => $this->request->getVar('status'),
                    'author' => $email
                ];
                if ($this->cmsModel->updateHeadContent($headContent, $id)) {
                    return redirect()->to(base_url('cms/homecontent'));
                }
            } else {
                session()->setTempdata('error', 'path problem', 2);
                return redirect()->to(current_url());
            }



        } else {
            $data['validation'] = $this->validator;
        }


        return view("cms/v_home_list/edit_headcontent", $data);
    }
}
