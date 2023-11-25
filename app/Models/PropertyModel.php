<?php

namespace App\Models;

use \CodeIgniter\Model;

class PropertyModel extends Model
{
    //fetch all from DataBase(property_list) table
    public function getPropertyLists()
    {
        $builder = $this->db->table('property_list');
        $result = $builder->get()->getResult();

        return $result;
    }
    //Inserting data from addproperty
    public function insertPropertylists($data)
    {
        $builder = $this->db->table('property_list');
        $result = $builder->insert($data);

        return $result;
    }
    //Inserting data from addproperty to store p_code and image_link
    public function insertImages($data)
    {
        $builder = $this->db->table('property_image');
        $insertedLinks = []; // Temporary array to keep track of inserted image links

        foreach ($data as $imageData) {
            $imageLink = $imageData['image_link'];

            // Check if the image link has not been inserted already
            if (!in_array($imageLink, $insertedLinks)) {
                $builder->insert($imageData);

                // Add the inserted image link to the temporary array
                $insertedLinks[] = $imageLink;
            }
        }
    }
    public function insertEmbedVIdeo($data)
    {
        $builder = $this->db->table('property_embed_video');
        $result = $builder->insert($data);

        return $result;
    }
    //Get images from DataBase(property_image) table
    public function getImagesByPropertyCode($propertyCode)
    {
        $builder = $this->db->table('property_image');
        $builder->select('image_link');
        $builder->where('p_code', $propertyCode);
        $images = $builder->get()->getResult();

        return $images;
    }
    //getPropertyList
    public function getPropertyListsById($id)
    {
        $builder = $this->db->table('property_list');
        $builder->where('id', $id);
        $result = $builder->get()->getRow(); // Use getRow() to retrieve a single row

        return $result;
    }

    public function updatePropertylists($propertydata, $id)
    {
        $builder = $this->db->table('property_list');
        $builder->where('id', $id)->update($propertydata);
    }

    public function deleteImage($imageLink)
    {
        $builder = $this->db->table('property_image');
        $builder->where('image_link', $imageLink);

        // Attempt to delete the image and check if it was deleted
        $result = $builder->delete();

        return $result; // Return true if the image was deleted, false if not
    }

    public function deletePropertyById($id)
    {
        $builder = $this->db->table('property_list');
        $builder->where('id', $id);

        // Attempt to delete the image and check if it was deleted
        $result = $builder->delete();

        return $result; // Return true if the image was deleted, false if not
    }

    public function insertPropertyLocation($data)
    {
        $builder = $this->db->table('property_map_location');
        $result = $builder->insert($data);

        return $result;
    }


}