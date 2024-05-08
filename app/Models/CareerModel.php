<?php

namespace App\Models;

use \CodeIgniter\Model;

class CareerModel extends Model {
    protected $table = 'careers'; //Name of table in database
    protected $primaryKey = 'id'; //ID primaryKey in Database
    protected $returnType = 'array'; //return from database you can use 'array' instead of 'object'
    protected $allowedFields = ['id', 'title', 'description','image', 'date_created'];

}
