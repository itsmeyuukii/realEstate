<?php

namespace App\Models;

use \CodeIgniter\Model;

class HomeModel extends Model
{
    public function getHeadContent()
    {
        $status = "show";
        $builder = $this->db->table("head_content");
        $builder->where("status", $status);
        $result = $builder->get();

        if ($result->getNumRows() > 0)
        {
            return $result->getResultArray();
        }

        return ''; // Return an empty string when no "show" status is found.
    }

    public function getPageTitle($id)
    {
        $builder = $this->db->table("cms_pages");
        $builder->where("id", $id);
        $result = $builder->get()->getRow();
        return $result;
    }
}