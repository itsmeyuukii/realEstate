<?php
namespace App\Controllers;

use \CodeIgniter\Controller;

class Users extends Controller
{

    public function __construct()
    {
        helper("form");
    }
    public function index()
    {
        $data = [];
        $data['validation'] = null;
        /*$rules = [ //check on Manual for more validation rules Codeigniter4
            'username' => 'required',
            'email' => 'required|valid_email', // to validate as email@email.com
            'password' => 'required',
            'mobile' => 'required|numeric|exact_length[11]' // to validate that it is a numeric and has a exact length of numbers
        ];*/

        $rules = [
            //check on Manual for more validation rules Codeigniter4
            'username' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Username s Required'
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => 'Email is Required',
                    'valid_email' => 'Please enter a Valid email'
                ]
            ],
            // to validate as email@email.com
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Password is Required'
                ]
            ],
            'mobile' => [
                'rules' => 'required|numeric|exact_length[11]',
                'errors' => [
                    'required' => 'Username Required',
                    'numeric' => 'Mobile {value} must be numeric',
                    'exact_length' => 'Mobbile {value} should contain exactly {param} digits'
                ]
            ] // to validate that it is a numeric and has a exact length of numbers
        ];

        //use request method tha is available in controller
        if ($this->request->getMethod() == 'post') {
            if ($this->validate($rules)) {
                // if validat is successful then its ready to save
                echo "ready to save";
            } else {
                $data['validation'] = $this->validator;
            }
        } else {

        }

        return view('myform', $data);
    }
}