<?php

namespace App\Models;
use CodeIgniter\Model;

class UsersModel extends Model {
    public function getData()
    {
        $subjects = [
            ['subject' => 'HTML', 'abbr' => 'Hyper Text Markup Language'],
            ['subject' => 'CSS', 'abbr' => 'Cascading Style Sheet'],
            ['subject' => 'JSON', 'abbr' => 'JavaScript Object Notation'],
            ['subject' => 'AJAX', 'abbr' => 'Asynchronus JavaScript and XML'],
            ['subject' => 'PHP', 'abbr' => 'Hypertext Reprocessor'],
        ];
        return $subjects;
    }
    public function getUsersList()
    {
        $db = \Config\Database::connect();
        $query = $db->query('select id,username,email,active from users');
        $result = $query->getResult();

        if (count($result)>0)
        {
            return $result;
        }else
        {
            return false;
        }
        
    }
}

