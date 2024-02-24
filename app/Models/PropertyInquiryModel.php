<?php

namespace App\Models;

use CodeIgniter\Model;

class PropertyInquiryModel extends Model
{
    protected $table = 'contact_property';
    protected $primaryKey = 'id';
    protected $returnType = 'array'; //return from database you can use 'array' instead of 'object'
    protected $allowedFields = ['id', 'full_name', 'p_code', 'email', 'phone', 'created_at'];
}