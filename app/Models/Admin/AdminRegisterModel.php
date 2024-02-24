<?php

namespace App\Models\Admin;
use CodeIgniter\Model;

class AdminRegisterModel extends Model 
{
    protected $table = 'admin'; //Name of table in database
    protected $primaryKey = 'id'; //ID primaryKey in Database
    protected $returnType = 'array'; //return from database you can use 'array' instead of 'object'

    protected $allowedFields = ['id', 'firstname', 'lastname', 'username', 'email', 'password', 'level', 'created_at', 'profile_pic'];

    public function isUniqueEmail($email)
    {
        return $this->where('email', $email)->countAllResults() === 0;
    }

    public function isUniqueUsername($username)
    {
        return $this->where('username', $username)->countAllResults() === 0;
    }
}