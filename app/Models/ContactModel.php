<?php

namespace App\Models;

use CodeIgniter\Database\Query;
use \CodeIgniter\Model;

class ContactModel extends Model{
    
    protected $table = 'contact'; //Name of table in database
    protected $primaryKey = 'id'; //ID primaryKey in Database
    protected $returnType = 'array'; //return from database you can use 'array' instead of 'object'
    protected $allowedFields = ['id', 'first_name', 'last_name', 'email', 'phone', 'message', 'date_created'];

    public function saveData($data)
{
    $builder = $this->db->table('contact');
    $result = $builder->insert($data);

    if (!$result)
    {
        // Log or display the error
        log_message('error', $this->db->error());
    }

    return $result;
}

}