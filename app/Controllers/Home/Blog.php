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
        helper("number");
        $this->googleClient = instantiateGoogleClient();
        $this->session = \Config\Services::session();
    }

    public function index ()
    {
        // $data['blogs'] = $this->bModel->get()->getResult();

        // Set up automatic pagination using CodeIgniter's built-in pager
        $perPage = 10;
        $currentPage = (int) ($this->request->getGet('page') ?? 1);

        // Paginate the array manually
        $startIndex = ($currentPage - 1) * $perPage;

        $blogs = $this->bModel->get()->getResultArray();

        // to get paginated properties
        $paginatedBlogs = array_slice($blogs, $startIndex, $perPage);

        // Set up CodeIgniter's built-in pager
        $pager = service('pager');
        $data['baseurl'] = base_url();
        $data['blogs'] = $paginatedBlogs;
        $data['page'] = $currentPage;
        $data['perPage'] = $perPage;
        $data['total'] = count($blogs);
        $data['pager'] = $pager;

        $data['googleButton'] = generateGoogleButton($this->googleClient);
        $data['basUrl'] = base_url();
        $data['is_logged_in'] = $this->session->get('logged_user') ? true : false;

        // $data['seo'] = "";

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
    public function firstArticle()
    {
        $data['picture'] = null;
        $data['googleButton'] = generateGoogleButton($this->googleClient);
        $data['is_logged_in'] = $this->session->get('logged_user') ? true : false;

        return view('home/custom_blogs/first_article', $data);
    }
}