<?php

namespace App\Models;

use \CodeIgniter\Model;

class LocationModel extends Model
{
    public function selectData($table, $where = array())
    {
        $builder = $this->db->table($table);
        $builder->select("*");
        $builder->where($where);
        $query = $builder->get();
        // echo $this->db->getLastQuery();
        // die();
        return $query->getResult();
    }

    public function selectProvince($id)
    {
        $builder = $this->db->table('province');
        $builder->where('id', $id);
        $result = $builder->get()->getRow(); // Use getRow() to retrieve a single row

        return $result;
    }
    public function selectMunicipality($id)
    {
        $builder = $this->db->table('municipality');
        $builder->where('id', $id);
        $result = $builder->get()->getRow(); // Use getRow() to retrieve a single row

        return $result;
    }

}