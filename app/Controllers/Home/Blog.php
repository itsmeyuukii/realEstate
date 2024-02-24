<?php

namespace App\Controllers\Home;

use CodeIgniter\Controller;
use App\Models\HomeModel;
use App\Models\PropertyModel;
use App\Models\BlogModel;

class Blog extends Controller
{
    protected $bModel;
    protected $hModel;
    protected $pModel;
    public function __construct()
    {
        $this->hModel = new HomeModel;
        $this->pModel = new PropertyModel;
        $this->bModel = new BlogModel;
        helper('form');
        helper("text");
        helper("google");
        $this->googleClient = instantiateGoogleClient();
        $this->session = \Config\Services::session();
    }

    public function index ()
    {
        // $data['blogs'] = $this->bModel->get()->getResult();

        $perPage = $this->request->getGet('list_length') ?? session()->get('perPage', 10);

        $data['page'] = (int) ($this->request->getGet('page') ?? 1);
        $data['perPage'] = $perPage;
        $data['total'] = $this->bModel->countAll();
        $data['blogs'] = $this->bModel->paginate(($data['perPage']));
        
        $data['pager'] = $this->bModel->pager;
        $data['googleButton'] = generateGoogleButton($this->googleClient);
        $data['is_logged_in'] = $this->session->get('logged_user') ? true : false;

        return view ("home/v_blog", $data);
    }

    public function blogDetail($slugs)
    {
        $data['base_url'] = base_url();
        $data['blog'] = $this->bModel->getWhere(['slugs' => $slugs])->getRow();

        $data['googleButton'] = generateGoogleButton($this->googleClient);
        $data['is_logged_in'] = $this->session->get('logged_user') ? true : false;
        $data['fbPreview'] = $this->bModel->getWhere(['slugs' => $slugs])->getRow();

        return view('home/v_blog_detail', $data);
    }
}