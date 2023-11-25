<?php 

namespace App\Controllers;
use \CodeIgniter\Controller;
use App\Models\AutoModel;

class Auto extends Controller {
    public $userModel;

    public function __construct(){
        $this->userModel = new AutoModel(); //OOP process

    }
    public function index(){

        
        //$data = $userModel->find($userName); // 
        // $data = $this->userModel->where('active','1')findAll();  // Finding all active = 1
        // $data = $this->userModel->findAll(2,1);   //limit , offset  to get data starting from ID = 2
        $data['users'] = $this->userModel->findAll(); // Find All to look at all data in DB table that is set in AutoModel 
        // echo "<pre>";                        // use echo "<pre>"; for Good display of array
        // print_r($data); 

        return view ('userview', $data);
    }
    
}