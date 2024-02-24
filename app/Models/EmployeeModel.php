<?php

namespace App\Models;

use \CodeIgniter\Model;

class EmployeeModel extends Model {
    protected $table = 'our_people'; //Name of table in database
    protected $primaryKey = 'id'; //ID primaryKey in Database
    protected $returnType = 'array'; //return from database you can use 'array' instead of 'object'

    protected $allowedFields = ['id', 'name', 'position', 'description', 'image_path'];

}