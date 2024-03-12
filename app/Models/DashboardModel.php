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

        $gbuilder = $this->db->table('google_login');
        $gbuilder->where('email', $email);
        $gresult = $gbuilder->get();

        if (($gresult->getNumRows()) == 1) { //get the row of result == 1
            return $gresult->getRow();
        }

    }
    public function updateProfile($email, $userData)
    {
        // Check if the user exists in the 'user' table
        $userBuilder = $this->db->table('user');
        $userBuilder->where('email', $email);
        $userResult = $userBuilder->get();

        if ($userResult->getNumRows() == 1) {
            $userBuilder->where('email', $email);
            $userBuilder->update($userData);
            return true; // User profile updated successfully
        }

        // Check if the user exists in the 'google_login' table
        $googleBuilder = $this->db->table('google_login');
        $googleBuilder->where('email', $email);
        $googleResult = $googleBuilder->get();

        if ($googleResult->getNumRows() == 1) {
            $googleBuilder->where('email', $email);
            $googleBuilder->update($userData);
            return true; // Google login profile updated successfully
        }

        return false; // User profile not found in either table
    }
    // Method to verify old password
    public function verifyPassword($username, $oldPassword)
    {
        $user = $this->db->table('users')->where('username', $username)->get()->getRow();
        if ($user) {
            return password_verify($oldPassword, $user->password);
        }
        return false;
    }

    // Method to update password
    public function updatePassword($username, $newPassword)
    {
        $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
        $data = ['password' => $hashedPassword];
        return $this->db->table('users')->where('username', $username)->update($data);
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