<?php

namespace App\Models;

use \CodeIgniter\Model;

class DropzoneModel extends Model
{
    public function insertImagesDropzone($filename)
    {
        $builder = $this->db->table('dropzone');
        $result = $builder->insert($filename);

        return $result;
    }

    public function deleteImageDropzone($filename)
    {
        $builder = $this->db->table('dropzone');
        $builder->where('filename', $filename);
        $builder->delete();
    }

    public function getTempImagesByProductId($product_id)
    {
        $builder = $this->db->table('dropzone');
        $builder->where('product_id', $product_id);
        $result = $builder->get()->getResult();

        return $result;
    }
    public function deleteTempImages($images) {
        foreach ($images as $image) {
            // delete images foreach image in dropzone where product_id
            $this->db->table('dropzone')->where('product_id', $image->product_id)->delete();
        }
    }
    
}