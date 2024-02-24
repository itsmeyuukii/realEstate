<?php

namespace App\Models;

use CodeIgniter\Model;

class FavouriteModel extends Model
{
    protected $table = 'user_favourite';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'p_code', 'email', 'created_at'];

    public function getFavProperties($username)
    {
        $builder = $this->db->table('user_favourite');
        $builder->select('property_list.*, GROUP_CONCAT(property_image.image_link) AS image_links');
        $builder->join('property_list', 'property_list.p_code = user_favourite.p_code');
        $builder->join('property_image', 'property_image.p_code = user_favourite.p_code', 'left');
        $builder->where('user_favourite.email', $username);
        $builder->groupBy('property_list.p_code');

        return $builder->get()->getResultArray();
    }
}