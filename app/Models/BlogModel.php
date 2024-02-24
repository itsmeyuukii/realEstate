<?php

namespace App\Models;

use \CodeIgniter\Model;

class BlogModel extends Model {
    protected $table = 'news_blog'; //Name of table in database
    protected $primaryKey = 'id'; //ID primaryKey in Database
    protected $returnType = 'array'; //return from database you can use 'array' instead of 'object'
    protected $allowedFields = ['id', 'title', 'description', 'image_path', 'updated_at'];

    public function getRecentBlogPost()
    {
        $builder = $this->db->table('news_blog');
        $builder->limit(5);
        $builder->orderBy('id', 'DESC');

        $result = $builder->get()->getResult();

        return $result;
    }
}
