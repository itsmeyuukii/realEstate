<?php

namespace App\Models;

use CodeIgniter\Database\Query;
use \CodeIgniter\Model;

class ContactModel extends Model{
    public function saveData($data)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('contact');

        $res = $builder->insert($data);

        return $res;
    }
}