<?php

namespace App\Models\Admin;

use \CodeIgniter\Model;

class AdminDashboardModel extends Model
{
    public function countAllProperties()
    {
        $builder = $this->db->table('property_list');
        
        // Use countAllResults to count all rows in the table
        $count = $builder->countAllResults();

        return $count;
    }
    public function countAllFavourites()
    {
        $builder = $this->db->table('user_favourite');
        
        // Use countAllResults to count all rows in the table
        $count = $builder->countAllResults();

        return $count;
    }
    public function countAllInquiries()
    {
        $builder = $this->db->table('contact');
        
        // Use countAllResults to count all rows in the table
        $count = $builder->countAllResults();

        return $count;
    }
    public function countAllViews()
    {
        $builder = $this->db->table('property_total_views');
        $builder->selectSum('total_views');
        $query = $builder->get();
        $result = $query->getRow();
    
        return $result ? $result->total_views : 0;
    }
    public function getLoggedInUserData($username)
    {
        $builder = $this->db->table('admin');
        $builder->where('username', $username);
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
        $builder = $this->db->table('admin_login_activity');
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
    public function getLoginUserInfo($username)
    {
        $builder = $this->db->table('admin_login_activity');
        $builder->where('username', $username);
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
        $builder = $this->db->table('admin_login_activity');
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