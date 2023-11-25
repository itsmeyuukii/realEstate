<?php

namespace App\Controllers;
use \App\Models\UsersModel;
use \CodeIgniter\Controller;

class Data extends Controller
{
    public function index()
    {
        $userModel = new UsersModel();
        $data ['subjects'] = $userModel->getData();
        return view("dataview", $data);
    }

    public function userslist()
    {
        $userModel = new UsersModel();
        $data['users'] = $userModel->getUsersList();
        return view ('userlist_view', $data);
    }
}