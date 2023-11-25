<?php

namespace App\Models;

use \CodeIgniter\Model;

class AutoModel extends Model {
    protected $table = 'users'; //Name of table in database
    protected $primaryKey = 'id'; //ID primaryKey in Database
    protected $returnType = 'array'; //return from database you can use 'array' instead of 'object'

}