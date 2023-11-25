<?php

namespace App\Models;
use CodeIgniter\Database\MySQLi\Builder;
use CodeIgniter\Model;

class RegisterModel extends Model {
    public function createUser($data)//$data is variable set for Register controller index
    {
        //query for user table
        $builder = $this->db->table('user');
        $res = $builder->insert($data); // to insert all data from register form
        if($this->db->affectedRows() == 1)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    public function verifyUniid($id)
    {
        //query for user table
        $builder = $this->db->table('user');
        $builder->select('activation_date,uniid,status'); // selecting rows of activation_date,uniid,status in table user
        $builder->where('uniid', $id); // to get the value in uniid
        $result = $builder->get(); //getting the builder get to result

        if ($result->getNumRows() == 1) { //get the row of result == 1
            return $result->getRow();
        } else {
            return false;
        }
        /*if ($builder->countAll() == 1)
        {
            return $result->getRow();
        }
        else
        {
            return false;
        } */
    }
        // to update the status to active where $uniid is 'uniid' 
        //               column    value       from link   column
    public function updateStatus($uniid)
    {
            //query for user table
        $builder = $this->db->table('user');
        $builder->where('uniid', $uniid); // to get the value in uniid
        $builder->update(['status'=>'active']); // status change to active
        if ($this->db->affectedRows() == 1) //condition to check if theres affectedrows
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}