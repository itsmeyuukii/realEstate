<?php

namespace App\Models;

use \CodeIgniter\Model;

class DashboardModel extends Model
{
    public function getLoggedInUserData($email)
    {
        $builder = $this->db->table('user');
        $builder->where('email', $email);
        $result = $builder->get();


        if (($result->getNumRows()) == 1) { //get the row of result == 1
            return $result->getRow();
        }
        else
        {
            return false;
        }
    }

    public function updateLogoutTime($id)
    {
        $builder = $this->db->table('login_activity');
        $builder->where('id', $id);
        $builder->update(['logout_time'=>date('Y-m-d h:i:d')]);
        if (($this->db->affectedRows())> 1) { //get the row of result == 1
            return true;
        }
        else
        {
            return false;
        }
    }
    public function getLoginUserInfo($email)
    {
        $builder = $this->db->table('login_activity');
        $builder->where('email', $email);
        $builder->orderBy('id', 'DESC');
        $builder->limit(10);
        $result = $builder->get();
        
        if (count($result->getResultArray())>0)
        {
            return $result->getResult();
        }
        else
        {
            return false;
        }

    }
    public function getLoginAdminInfo()
    {
        $builder = $this->db->table('login_activity');
        $builder->orderBy('id', 'DESC');
        $result = $builder->get();
        
        if (count($result->getResultArray())>0)
        {
            return $result->getResult();
        }
        else
        {
            return false;
        }
    }
} 