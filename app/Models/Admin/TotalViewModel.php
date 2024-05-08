<?php

namespace App\Models\Admin;

use \CodeIgniter\Model;

class TotalViewModel extends Model
{
    protected $table = 'property_total_views';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $allowedFields = ['id', 'p_code', 'total_views', 'view_date'];
    
    public function getTotalViewsByMonth()
    {
        $builder = $this->db->table('property_total_views');
        $builder->select('YEAR(view_date) as year, MONTH(view_date) as month, SUM(total_views) as total_views');
        $builder->groupBY('YEAR(view_date), MONTH(view_date)');
        $result = $builder->get();

        return $result->getResultArray();
    }
}