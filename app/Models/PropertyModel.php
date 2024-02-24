<?php

namespace App\Models;

use \CodeIgniter\Model;

class PropertyModel extends Model
{
    protected $table = 'property_list';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id','p_code', 'p_type','p_title','price','v_status'];

    //fetch all from DataBase(property_list) table
    public function getPropertyLists()
    {
        $builder = $this->db->table('property_list');
        $result = $builder->get()->getResult();
        
        return $result;
    }
    public function getFeaturedPropertyListWithImages()
    {
        $builder = $this->db->table('property_list');
        $builder->select('property_list.*, property_image.image_link');
        $builder->join('property_image', 'property_image.p_code = property_list.p_code', 'LEFT');
        $builder->where('property_list.p_feature', 2);
        $builder->groupBy('property_list.id');
        $builder->orderBy('property_list.id', 'desc');

        $result = $builder->get()->getResult();

        return $result;
    }
    public function getRecentPropertyListsWithImages()
    {
        $builder = $this->db->table('property_list');
        $builder->select('property_list.*, property_image.image_link');
        $builder->join('property_image', 'property_image.p_code = property_list.p_code', 'LEFT');
        $builder->groupBy('property_list.id'); // Group by property_list.id to avoid duplicate properties
        $builder->orderBy('property_list.id', 'desc'); // Assuming 'id' is the primary key column
        $builder->limit(5);

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
    public function insertSessionId($sessionId)
    {
        $builder = $this->db->table('product_id');
        $result = $builder->insert($sessionId);

        return $result;
    }
    //Inserting data from addproperty to store p_code and image_link
    public function insertBatchImages($imagedata) {
        $builder = $this->db->table('property_image');
        $result = $builder->insertBatch($imagedata);

        return $result;
    }
    public function insertEmbedVIdeo($data)
    {
        $builder = $this->db->table('property_embed_video');
        $result = $builder->insert($data);

        return $result;
    }
    //Inserting Data from addproperty to store in property map location DB
    public function insertPropertyLocation($data)
    {
        $builder = $this->db->table('property_map_location');
        $result = $builder->insert($data);

        return $result;
    }

    //Get Map Location via Pcode
    public function getMapLocation($propertyCode)
    {
        $builder = $this->db->table('property_map_location');
        $builder->where('p_code', $propertyCode);
        $result = $builder->get()->getRow();

        return $result;
    }
    //Get images from DataBase(property_image) table
    public function getImagesByPropertyCode($propertyCode)
    {
        $builder = $this->db->table('property_image');
        // $builder->select('image_link');
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
    public function getPropertyListsBySlug($slug)
    {
        $builder = $this->db->table('property_list');
        $builder->where('slug', $slug);
        $result = $builder->get()->getRow(); // Use getRow() to retrieve a single row

        return $result;
    }
    //get Search
    public function getFilteredProperties($listType, $location, $pType, $price)
    {
        $builder = $this->db->table('property_list');
    
        // Build the query based on the provided filters
        $builder->select('property_list.*, GROUP_CONCAT(property_image.image_link) as image_links');
    
        // Add the join clause to link property_list and property_image tables
        $builder->join('property_image', 'property_list.p_code = property_image.p_code', 'left');
    
        $builder->where('property_list.list_type', $listType);
    
        if ($location !== 'all') {
            $builder->groupStart()
                    ->like('property_list.p_title', $location, 'both') // 'both' means searching for similar strings on both sides
                    ->orGroupStart()
                        ->like('property_list.p_code', $location, 'both') // 'both' means searching for similar strings on both sides
                    ->groupEnd()
                    ->groupEnd();
        }
    
        if ($pType !== 'all') {
            $builder->where('property_list.p_type', $pType);
        }
    
        if ($price !== 'all') {
            $priceParts = explode('-', str_replace('price:', '', $price));
            if (count($priceParts) === 2) {
                $priceMin = str_replace(',', '', $priceParts[0]);
                $priceMax = str_replace(',', '', $priceParts[1]);
                if ($priceMin == 0) {
                    $builder->where("property_list.price <= $priceMax");
                } else {
                    $builder->where("property_list.price BETWEEN $priceMin AND $priceMax");
                }
            } else {
                $priceMin = null;
                $priceMax = null;
            }
        }
         // Group by property_list columns to avoid duplicate rows for each property
        $builder->groupBy('property_list.p_code');
        $builder->orderBy('property_list.p_code', 'DESC');
        // Execute the query and return the result
        return $builder->get()->getResultArray();
    }

    public function incrementTotalViewsByPCode($pCode)
    {
        $today = date('Y-m-d');
        $existingRow = $this->db->table('property_total_views')
                                ->where('p_code', $pCode)
                                ->where('view_date', $today)
                                ->get()
                                ->getRow();
        if ($existingRow) {
            // If a row exists, increment the total views count
            $result = $this->db->table('property_total_views')
                                ->where('p_code', $pCode)
                                ->where('view_date', $today)
                                ->set('total_views', 'total_views + 1', false)
                                ->update();
        } else {
            // If no row exists, insert a new row with the initial view count of 1
            $result = $this->db->table('property_total_views')
                                ->insert([
                                    'p_code' => $pCode,
                                    'view_date' => $today,
                                    'total_views' => 1
                                ]);
        }
    
        return $result;
    }
    public function incrementUserViewsByPCode($pCode, $userEmail)
    {
        // Calculate the timestamp for one hour ago
        $oneHourAgo = date('Y-m-d H:i:s', strtotime('-1 hour'));

        // Check if there are any views within the last hour for the specified property code and user email
        $existingView = $this->db->table('property_user_views')
                                ->where('p_code', $pCode)
                                ->where('email', $userEmail)
                                ->where('view_date >=', $oneHourAgo)
                                ->get()
                                ->getRow();

        // If no views exist within the last hour, insert a new view
        if (!$existingView) {
            $this->db->table('property_user_views')
                    ->insert([
                        'p_code' => $pCode,
                        'email' => $userEmail,
                        'view_date' => date('Y-m-d H:i:s')  // Set current timestamp
                    ]);
        }
    }

    //Admin property search
    public function searchProperties($keyword, $perPage)
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
    public function getEmbedVideo($propertyCode)
    {
        $builder = $this->db->table('property_embed_video');
        $builder->where('p_code', $propertyCode);
        $result = $builder->get()->getRow();

        return $result;
    }
    //update Property list
    public function updatePropertylists($propertydata, $id)
    {
        $builder = $this->db->table('property_list');
        $builder->where('id', $id)->update($propertydata);
    }
    //update Embeded video
    public function updateEmbedVIdeo($propertyVideo, $p_code)
    {
        $builder = $this->db->table('property_embed_video');
        $builder->where('p_code', $p_code)->update($propertyVideo);
    }
    //update Map Location
    public function updatePropertyLocation($propertyLocation, $pcode)
    {
        $builder = $this->db->table('property_map_location');
        $builder->where('p_code', $pcode)->update($propertyLocation);
    }

    public function deleteImageFromEditDropzone($image_link)
    {
        $builder = $this->db->table('property_image');
        $builder->where('image_link', $image_link);

        $result = $builder->delete();

        return $result;
    }

    public function deletePropertyById($id)
    {
        $builder = $this->db->table('property_list');
        $builder->where('id', $id);

        // Attempt to delete the image and check if it was deleted
        $result = $builder->delete();

        return $result; // Return true if the image was deleted, false if not
    }
    //delete and unlink images if property is deleted
    public function deletePropertyImages($images)
    {
        foreach($images as $image){
            $imagepath = $image->image_link;
            if (@unlink($imagepath))
            {
                $this->db->table('testpropertyimage')->where('image_link', $image->image_link)->delete();
            }
            
        }
    }
    

}