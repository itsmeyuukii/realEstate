<?php

namespace App\Models;

use CodeIgniter\Model;

class GoogleLoginModel extends Model
{
    protected $table = 'google_login';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'oauth_id', 'name', 'email', 'profile_img', 'created_at', 'updated_at'];

    public function isAlreadyRegister($oauthid){
        return $this->db->table('google_login')->getWhere(['oauth_id'=>$oauthid])->getRowArray()>0?true:false;
    }

    public function updateUserData($userdata, $oauthid)
    {
        $builder = $this->db->table('google_login');
        $builder->where('oauth_id', $oauthid);
        $result = $builder->update($userdata);

        return $result;
    }
    public function insertUserData($userdata)
    {
        $builder = $this->db->table('google_login');
        $result = $builder->insert($userdata);

        return $result;
    }
}