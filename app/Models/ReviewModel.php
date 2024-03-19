<?php

namespace App\Models;

use CodeIgniter\Model;

class ReviewModel extends Model
{
    protected $table = 'cms_reviews';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $allowedFields = ['id','name','agent','review','created_at'];
}