<?php
namespace App\Controllers\Admin;

use App\Models\Admin\AdminRegisterModel;
use App\Models\DropzoneModel;
use CodeIgniter\Controller;
use App\Models\LocationModel;
use App\Models\PropertyModel;
use App\Models\Admin\AdminDashboardModel;
use CodeIgniter\Log\Logger;

class Propertystaging extends Controller
{
    protected $locModel;
    protected $session;
    protected $logger;
    protected $pModel;
    protected $dzModel;
    protected $rModel;
    protected $dModel;

    public function __construct()
    {
        $this->dzModel = new DropzoneModel();
        $this->locModel = new LocationModel();
        $this->pModel = new PropertyModel();
        $this->rModel = new AdminRegisterModel;
        $this->dModel = new AdminDashboardModel();
        $this->session = \Config\Services::session();
        $this->logger = service(Logger::class); // Initialize the logger
        helper("form");
        helper('file');
        helper("slug");
        
    }

    public function index()
    {
        // Check if there's a logged user
        if (!$this->session->get('logged_user')) {
            return redirect()->to(base_url());
        }

        // Check if the user is logged in
        $logged_username = $this->session->get('logged_user');
        $adminLevel = $this->rModel->where('username', $logged_username)->first();

        // Check level of security
        if (!in_array($adminLevel['level'], [1, 2, 3])) {
            return redirect()->to(base_url('unauthorized'));
        }

        // Set up pagination
        $data['perPage'] = $this->request->getGet('property-list_length') ?? session()->get('perPage', 10);
        

        // Get search keyword from the input
        $keyword = $this->request->getGet('keyword');

        // If there is a search keyword, perform the search
        if (!empty($keyword) && strlen($keyword) >= 4) {
            $searchResults = $this->pModel->searchProperties($keyword, $data['perPage']);
            $data['properties'] = $searchResults['pagedResult'];
            $data['total'] = $searchResults['totalResults'];
            $data['page'] = (int) ($this->request->getGet('page') ?? 1);
        } else {
            // If no search keyword, paginate all properties
            $data['properties'] = $this->pModel->paginate($data['perPage']);
            $data['page'] = (int) ($this->request->getGet('page') ?? 1);
            $data['total'] = $this->pModel->countAll();
        }
        
        $data['request'] = $this->request;

        $data['pager'] = $this->pModel->pager;
        $data['userdata'] = $this->dModel->getLoggedInUserData($logged_username);

        return view("propertylist/v_propertyliststaging", $data);
    }


    public function addProperty()
    {
        //check if theres a logged user
        if (!$this->session->get('logged_user')) {
            return redirect()->to(base_url());
        }
        // Check if the user is logged in
        $logged_username = $this->session->get('logged_user');
        $adminLevel = $this->rModel->where('username', $logged_username)->first();
        
        //check level of security
        if(!in_array($adminLevel['level'], [1, 2]) )
        {
            return redirect()->to(base_url('unauthorized'));
        }
        
        //insert sessionid as product_id
        $sessionId = $this->request->getGet('session_id');
		$this->session->set('dropzone_session_id', $sessionId);
		$pushSession = [
			'product_id' => $sessionId
		];

		$this->pModel->insertSessionId($pushSession);

        $region = $this->locModel->selectData("region");
        $data['regions'] = $region;
        $data['validation'] = null;
        $pDescContent = $this->request->getVar('p_desc');
        $images = $this->dzModel->getTempImagesByProductId($sessionId);

        $regionName = $this->locModel->selectRegion($this->request->getVar('region_id'));
        $provinceName = $this->locModel->selectProvince($this->request->getVar('province_id'));
        $muniName = $this->locModel->selectMunicipality($this->request->getVar('municipality_id'));
        

        if ($this->request->getMethod() == "post") {
            $p_title = $this->request->getVar('p_title');
            $slug = create_slug($p_title);
            $propertyData = [
                // Property Identification
                "p_type" => $this->request->getVar('p_type'),
                "p_class" => $this->request->getVar('p_class'),
                "p_status" => $this->request->getVar('p_status'),
                "ribbon" => $this->request->getVar('ribbon'),
                "furnish" => $this->request->getVar('furnish'),
                "fc_status" => $this->request->getVar('fc_status'),
                "list_type" => $this->request->getVar('list_type'),
                "p_feature" => $this->request->getVar('p_feature'),
                "v_status" => $this->request->getVar('v_status'),
                // Property Description
                "p_title" => $p_title,
                "slug" => $slug,
                "p_code" => $this->request->getVar('p_code'),
                "p_desc" => $pDescContent,
                // Additional Descriptions
                "lot_area" => $this->request->getVar('lot_area'),
                "floor_area" => $this->request->getVar('floor_area'),
                "address" => $this->request->getVar('address'),
                // Property Location
                'region_name' => $regionName->region_name,
                'province_name' => $provinceName->province_name,
                'municipality_name' => $muniName->m_name,
                //payment price
                'price_type' => $this->request->getVar('price_type'),
                'price' => $this->request->getVar('price')
            ];
            $propertyMapLocation = [
                'p_code' => $propertyData['p_code'],
                'name' => $propertyData['p_title'],
                'region_id' => $this->request->getVar('region_id'),
                'province_id' => $this->request->getVar('province_id'),
                'municipality_id' => $this->request->getVar('municipality_id'),
                'address' => $propertyData['address'],
                'type' => $propertyData['p_type'],
                'lng' => $this->request->getVar('longitude'),
                'lat' => $this->request->getVar('latitude')
            ];
            $propertyVideo = [
                'embed_link' => $this->request->getVar('embed_link'),
                'p_code' => $propertyData['p_code'],
            ];

            // Process and move uploaded images
            $imageData = [];
            if ($images) {
                foreach ($images as $image) {
                    //call the source image from dropzone
                    $source_img = 'public/uploads/temp/' . $image->filename;
                    //save the pathinfo
                    $image_path_info = pathinfo($image->filename);
                    //retain the extension name
                    $image_extension = isset($image_path_info['extension']) ? '.' . $image_path_info['extension'] : '';
                    //create new name for image
                    $uniqueId = substr(uniqid(), 0, 14);
                    $new_filename = $uniqueId . $image_extension;
                    //destination folder
                    $dest = 'public/uploads/product_images/' . $new_filename;
    
                    $copyImage = copy($source_img, $dest);
    
                    if ($copyImage) {
                        $image_link = 'public/uploads/product_images/' . $new_filename;
                        $imageData[] = [
                            'image_link' => $image_link,
                            'p_code' => $this->request->getVar('p_code'),
                        ];
                        // Delete the file from the temp folder
                        unlink($source_img);
                    }
                }
                // Batch insert all images
                if (!empty($imageData)) {
                    $this->pModel->insertBatchImages($imageData);
                    //delete the records from database
                    $this->dzModel->deleteTempImages($images);
                }
            }
            //insert all the data
            try {
                $this->pModel->insertPropertylists($propertyData);
                $this->pModel->insertEmbedVIdeo($propertyVideo);
                $this->pModel->insertPropertyLocation($propertyMapLocation);
            } catch (\Exception $e) {
                $this->logger->error('Error inserting images into the database: ' . $e->getMessage());
                session()->setTempdata('error', 'Property Not Created');
                return redirect()->to(current_url());
            }
            session()->setTempdata('success', 'Property Created Successfully');
            return redirect()->to(base_url('propertystaging'));
        }
        
        $data['userdata'] = $this->dModel->getLoggedInUserData($logged_username);
        return view("propertylist/v_addpropertystaging", $data);
    }
    public function editProperty($id)
    {
        //check if theres a logged user
        if (!$this->session->get('logged_user')) {
            return redirect()->to(base_url());
        }
        // Check if the user is logged in
        $logged_username = $this->session->get('logged_user');
        $adminLevel = $this->rModel->where('username', $logged_username)->first();
        
        //check level of security
        if(!in_array($adminLevel['level'], [1, 2]) )
        {
            return redirect()->to(base_url('unauthorized'));
        }
        //get property via $id
        $properties = $this->pModel->getPropertyListsById($id);
        $data['properties'] = $properties;
        //get Image links via p_code
        $getPCode = $properties->p_code;
        //Transfer to $data['images'] for view
        $imagesViaPcode = $this->pModel->getImagesByPropertyCode($getPCode);
        $data['images'] = $imagesViaPcode;
        //transfer to data Map Location via pcode
        $mapLoc = $this->pModel->getMapLocation($getPCode);
        $data['mapLoc'] = $mapLoc;
        //region
        $region = $this->locModel->selectData("region");
        $data['regions'] = $region;

        if($mapLoc)
        {
            //Province
            $provinceId = $mapLoc->province_id;
            $prov_data = $this->locModel->selectProvince($provinceId);
            $data['prov_data'] = $prov_data;
            //Municipality
            $muniId = $mapLoc->municipality_id;
            $muni_data = $this->locModel->selectMunicipality($muniId);
            $data['muni_data'] = $muni_data;
        }
        
        //Transfer to data Embed Video via Pcode
        $embedVideo = $this->pModel->getEmbedVideo($getPCode);
        
        $data['embedVideo'] = $embedVideo;
        $data['validation'] = null;
        //get Description
        $pDescContent = $this->request->getVar('p_desc');

        $images = $this->dzModel->getTempImagesByProductId($getPCode);
        
        $regionName = $this->locModel->selectRegion($this->request->getVar('region_id'));
        $provinceName = $this->locModel->selectProvince($this->request->getVar('province_id'));
        $muniName = $this->locModel->selectMunicipality($this->request->getVar('municipality_id'));


        if ($this->request->getMethod() == "post") {
            $propertyData = [
                // Property Identification
                "p_type" => $this->request->getVar('p_type'),
                "p_class" => $this->request->getVar('p_class'),
                "p_status" => $this->request->getVar('p_status'),
                "ribbon" => $this->request->getVar('ribbon'),
                "furnish" => $this->request->getVar('furnish'),
                "fc_status" => $this->request->getVar('fc_status'),
                "list_type" => $this->request->getVar('list_type'),
                "p_feature" => $this->request->getVar('p_feature'),
                "v_status" => $this->request->getVar('v_status'),
                // Property Description
                "p_title" => $this->request->getVar('p_title'),
                "p_code" => $this->request->getVar('p_code'),
                "p_desc" => $pDescContent,
                // Additional Descriptions
                "lot_area" => $this->request->getVar('lot_area'),
                "floor_area" => $this->request->getVar('floor_area'),
                "address" => $this->request->getVar('address'),
                // Property Location
                'region_name' => $regionName->region_name,
                'province_name' => $provinceName->province_name,
                'municipality_name' => $muniName->m_name,
                //payment price
                'price_type' => $this->request->getVar('price_type'),
                'price' => $this->request->getVar('price')
            ];
            $propertyMapLocation = [
                'p_code' => $propertyData['p_code'],
                'name' => $propertyData['p_title'],
                'region_id' => $this->request->getVar('region_id'),
                'province_id' => $this->request->getVar('province_id'),
                'municipality_id' => $this->request->getVar('municipality_id'),
                'address' => $propertyData['address'],
                'type' => $propertyData['p_type'],
                'lng' => $this->request->getVar('longitude'),
                'lat' => $this->request->getVar('latitude')
            ];
            $propertyVideo = [
                'embed_link' => $this->request->getVar('embed_link'),
                'p_code' => $propertyData['p_code'],
            ];

            // Process and move uploaded images
            $imageData = [];
            if (!empty($images)) {
                foreach ($images as $image) {
                    //call the source image from dropzone
                    $source_img = 'public/uploads/temp/' . $image->filename;
                    //save the pathinfo
                    $image_path_info = pathinfo($image->filename);
                    //retain the extension name
                    $image_extension = isset($image_path_info['extension']) ? '.' . $image_path_info['extension'] : '';
                    //create new name for image
                    $uniqueId = substr(uniqid(), 0, 14);
                    $new_filename = $uniqueId . $image_extension;
                    //destination folder
                    $dest = 'public/uploads/product_images/' . $new_filename;
    
                    $copyImage = copy($source_img, $dest);
    
                    if ($copyImage) {
                        $image_link = 'public/uploads/product_images/' . $new_filename;
                        $imageData[] = [
                            'image_link' => $image_link,
                            'p_code' => $this->request->getVar('p_code'),
                        ];
                        // Delete the file from the temp folder
                        unlink($source_img);
                    }
                }
                // Batch insert all images
                if (!empty($imageData)) {
                    $this->pModel->insertBatchImages($imageData);
                    //delete the records from database
                    $this->dzModel->deleteTempImages($images);
                }
            }
            if($embedVideo)
            {
                $this->pModel->updateEmbedVIdeo($propertyVideo, $getPCode);
            }else
            {
                $this->pModel->insertEmbedVIdeo($propertyVideo);
            }
            //insert all the data
            try {
                $this->pModel->updatePropertylists($propertyData, $id);
                $this->pModel->insertPropertyLocation($propertyMapLocation);
            } catch (\Exception $e) {
                $this->logger->error('Error inserting images into the database: ' . $e->getMessage());
                session()->setTempdata('error', 'Property Not Created');
                return redirect()->to(current_url());
            }
            session()->setTempdata('success', 'Property Created Successfully');
            return redirect()->to(base_url('propertystaging'));
        }
        $data['userdata'] = $this->dModel->getLoggedInUserData($logged_username);
        return view("propertylist/v_editpropertystaging", $data);
    }
    public function deleteImage()
    {
        $imageName = $this->request->getPost('filename');

		$imagePath = $imageName;

		// Perform the deletion
		if (file_exists($imagePath)) {
			@unlink($imagePath);
			// Delete the record from the database
			$this->pModel->deleteImageFromEditDropzone($imageName);

			return json_encode([
				"status" => 1,
				"message" => "Image deleted successfully."
			]);
		} else {
			return json_encode([
				"status" => 0,
				"message" => "Error deleting image." . $imageName
			]);
		}
    }
    public function deleteProperty($id)
    {
        $data = [];
		$data['property'] = $this->pModel->getPropertyListsById($id);

		$getPcode = $data['property']->p_code;
		$images = $this->pModel->getImagesByPropertyCode($getPcode);


		if($this->pModel->deletePropertyById($id))
		{
			$this->pModel->deletePropertyImages($images);
			
			return redirect()->to(base_url('propertystaging'));
		} else
		{
			echo "error";
		}
    }
    public function province()
    {
        $regionID = $this->request->getPost("rId");
        $provinceData = $this->locModel->selectData("province", array("region_id" => $regionID));

        $output = "";
        foreach ($provinceData as $province) {
            $output .= "<option value='$province->id'>$province->province_name</option>";
        }
        return $this->response->setBody($output);
    }
    public function municipality()
    {
        $provinceID = $this->request->getPost("pId");
        $municipalityData = $this->locModel->selectData("municipality", array("province_id" => $provinceID));

        $output = "";
        foreach ($municipalityData as $municipality) {
            $output .= "<option value='$municipality->id'>$municipality->m_name</option>";
        }
        return $this->response->setBody($output);
    }
    public function insertDropzoneImageTemp()
    {
        $images = $this->request->getFile('file');
		$sessionID = $this->session->get('dropzone_session_id');

		if (!$sessionID) {
			// Handle the case when session ID is not available
			return json_encode([
				"status" => 0,
				"message" => 'Session ID not found.',
			]);
		}

		$imageName = $images->getRandomName();
		$images->move('public/uploads/temp', $imageName);
		$data = [
			"filename" => $imageName,
			"product_id" => $sessionID
		];
		try {
			$this->dzModel->insertImagesDropzone($data);
		} catch (\Exception $e) {
			$this->logger->error('Error inserting image into the database: ' . $e->getMessage());
			return $this->fail('Error inserting image into the database.');
		}

		return json_encode([
			"status" => 1,
			"filename" => $imageName

		]);
        
    }
    public function editDropzoneStore()
	{
		$images = $this->request->getFile('file');

		$pcode = $this->request->getPost('p_code');

		$imageName = $images->getRandomName();
		$images->move('public/uploads/temp', $imageName);
		$data = [
			"filename" => $imageName,
			"product_id" => $pcode
		];
		try {
			$this->dzModel->insertImagesDropzone($data);
		} catch (\Exception $e) {
			$this->logger->error('Error inserting image into the database: ' . $e->getMessage());
			return $this->fail('Error inserting image into the database.');
		}

		return json_encode([
			"status" => 1,
			"filename" => $imageName

		]);
	}
    public function deleteDropzoneImageTemp()
	{
		$imageName = $this->request->getPost('filename');

		$imagePath = 'public/uploads/temp/' . $imageName;

		// Perform the deletion
		if (file_exists($imagePath)) {
			@unlink($imagePath);
			// Delete the record from the database
			$this->dzModel->deleteImageDropzone($imageName);

			return json_encode([
				"status" => 1,
				"message" => "Image deleted successfully."
			]);
		} else {
			return json_encode([
				"status" => 0,
				"message" => "Error deleting image." . $imageName
			]);
		}

	}

}