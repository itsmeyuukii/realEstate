<?php

namespace App\Models;

use \CodeIgniter\Model;

class CmsModel extends Model
{
    public function createHeadContent($data)
    {
        //query for home_content table
        $builder = $this->db->table('head_content');
        $result = $builder->insert($data); // to insert all data from register form
        return $result;
    }

    public function getHeadContent()
    {
        $builder = $this->db->table('head_content');
        $result = $builder->get()->getResultArray();

        return $result;
    }

    public function getHeadContentById($id)
    {
        $builder = $this->db->table('head_content');
        $builder-> where('id', $id);
        $result = $builder->get()->getRow();

        return $result;
    }

    public function updateHeadContent($data, $id)
    {
        $builder = $this->db->table('head_content');
        $builder->where('id', $id);
        $result = $builder->update($data);
        return $result;
    }
}