<?php

namespace App\Models;

use CodeIgniter\Model;

class SellModel extends Model
{
    protected $table = 'sell_property';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id','type','title','class','address','maps','floor_area','lot_area','full_name','phone','email','created_at'];

}