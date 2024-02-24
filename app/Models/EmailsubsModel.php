<?php

namespace App\Models;

use CodeIgniter\Model;

class EmailsubsModel extends Model
{
    protected $table = 'email_news_letter';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $allowedFields = ['id', 'email', 'date_created'];
}