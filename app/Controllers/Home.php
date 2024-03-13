<?php

namespace App\Controllers;
use App\Models\HomeModel;
use App\Models\PropertyModel;
use App\Models\GoogleLoginModel;
use App\Models\FavouriteModel;

class Home extends BaseController
{
    protected $homeModel;
    protected $pModel;
    protected $gModel;
    protected $session;
    protected $fModel;

    public function __construct()
    {
        helper("form");
        helper("google");
        helper("number");
        $this->homeModel = new HomeModel();
        $this->pModel = new PropertyModel();
        $this->fModel = new FavouriteModel();
        $this->googleClient = instantiateGoogleClient();
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        $favourites = [];

        if (session()->has('logged_user')) {
            $userEmail = session()->get('logged_user');
            $favourites = $this->fModel->where('email', $userEmail)
                ->findAll();
        }

        $data['favourites'] = $favourites;
        $id = 1;
        $data[] = null;
        $data['recentProperties'] = $this->pModel->getRecentPropertyListsWithImages();
        $data['featuredProperties'] = $this->pModel->getFeaturedPropertyListWithImages();
        $data['page_title'] = $this->homeModel->getPageTitle($id);
        $data['total_properties'] = $this->pModel->countAll();
        $data['googleButton'] = generateGoogleButton($this->googleClient);

        $data['is_logged_in'] = $this->session->get('logged_user') ? true : false;
        return view("homeview", $data);
    }

    public function welcome()
    {
        
        return view("welcome_message");
    }
    public function staging()
    {
        $data = [
            'page_title' => 'MSG-Homes | Staging',
            'page_heading' => 'Staging',
        ];
        return view("staging",$data);
    }
}
