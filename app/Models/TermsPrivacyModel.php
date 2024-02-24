<?php

namespace App\Models;

use CodeIgniter\Model;


class TermsPrivacyModel extends Model
{
    protected $table = 'cms_pages'; //Name of table in database
    protected $primaryKey = 'id'; //ID primaryKey in Database
    protected $returnType = 'array'; //return from database you can use 'array' instead of 'object'

    protected $allowedFields = ['id', 'page_title', 'slug', 'meta_key', 'meta_description', 'content', 'updated_at', 'is_display'];


    public function searchPages($keyword, $perPage)
    {
        $result = $this->like('p_code', $keyword)
                    ->orLike('address', $keyword)
                    ->findAll(); // Perform the search without pagination

        $totalResults = count($result); // Count the total number of results

        $pagedResult = $this->like('p_code', $keyword)
                        ->orLike('address', $keyword)
                        ->paginate($perPage); // Paginate the data

        return [
            'totalResults' => $totalResults,
            'pagedResult' => $pagedResult,
        ];
    }
    public function updateContentPage($id, $contentData)
    {
        $builder = $this->db->table('cms_pages');
        $builder->where('id', $id);
        $result = $builder->update($contentData);

        return $result;

    }
}