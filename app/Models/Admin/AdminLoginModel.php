<?php

namespace App\Models\Admin;

use CodeIgniter\Database\MySQLi\Builder;
use \CodeIgniter\Model;

class AdminLoginModel extends Model
{
    public function verifyEmail($username)
    {
        $builder = $this->db->table('admin');
        $builder->select("username,email,password,level");
        $builder->where('username', $username);
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
        $builder = $this->db->table('admin_login_activity');
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