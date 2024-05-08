<?php

namespace App\Models;

use CodeIgniter\Database\MySQLi\Builder;
use \CodeIgniter\Model;

class LoginModel extends Model
{
    public function verifyEmail($email)
    {
        $builder = $this->db->table('user');
        $builder->select("uniid,status,full_name,password,email");
        $builder->where('email', $email);
        $result = $builder->get(); //getting the builder get to result

        if ($result->getNumRows() == 1) { //get the row of result == 1
            return $result->getRow();
        }
        else
        {
            return false;
        }
    }
    public function saveLoginInfo($data) // Connect login info to DataBase and save
    {
        $builder = $this->db->table('login_activity');
        $builder->insert($data);
        if ($this->db->affectedRows())
        {
            return $this->db->insertID();
        }
        else    
        {
            return false;
        }

    }
}