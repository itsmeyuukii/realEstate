<?php

namespace App\Controllers\Home;

use CodeIgniter\Controller;
use App\Models\EmployeeModel;
use App\Models\CareerModel;

class Aboutus extends Controller
{
    protected $eModel;
    protected $session;
    protected $careerModel;
    public function __construct()
    {
        $this->eModel = new EmployeeModel; 
        $this->careerModel = new CareerModel();
        helper('form');
        helper('google');
        $this->googleClient = instantiateGoogleClient();
        $this->session = \Config\Services::session();
    }
    public function affiliate()
    {
        $data['googleButton'] = generateGoogleButton($this->googleClient);
        $data['is_logged_in'] = $this->session->get('logged_user') ? true : false;
        return view("home/v_affiliate", $data);
    }
    public function ourPeople()
    {
        $employees = $this->eModel->get()->getResult();

        $data['employees'] = $employees;
        $data['googleButton'] = generateGoogleButton($this->googleClient);
        $data['is_logged_in'] = $this->session->get('logged_user') ? true : false;

        return view ("home/v_our_people", $data);
    }
    public function ourCompany()
    {
        $data['googleButton'] = generateGoogleButton($this->googleClient);
        $data['is_logged_in'] = $this->session->get('logged_user') ? true : false;

        return view ("home/v_our_company", $data);
    }

    public function testimonials()
    {
        $data['googleButton'] = generateGoogleButton($this->googleClient);
        $data['is_logged_in'] = $this->session->get('logged_user') ? true : false;
        return view("home/v_clientsTestimonials", $data);
    }
    public function commendation()
    {
        $data['googleButton'] = generateGoogleButton($this->googleClient);
        $data['is_logged_in'] = $this->session->get('logged_user') ? true : false;
        return view("home/v_commendation", $data);
    }

    public function careers()
    {
        //get Careers data
        $careers = $this->careerModel->get()->getResult();
        $data['careers'] = $careers;

        $data['googleButton'] = generateGoogleButton($this->googleClient);
        $data['is_logged_in'] = $this->session->get('logged_user') ? true : false;
        return view("home/v_careers",$data);
    }
}