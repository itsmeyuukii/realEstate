<?php
namespace App\Controllers\Admin;

use CodeIgniter\Controller;
use App\Models\LocationModel;
use App\Models\PropertyModel;
use CodeIgniter\Log\Logger;

class Propertylist extends Controller
{
    protected $locModel;
    protected $session;
    protected $logger;
    protected $pModel;

    public function __construct()
    {
        $this->locModel = new LocationModel();
        $this->pModel = new PropertyModel();
        $this->session = \Config\Services::session();
        $this->logger = service(Logger::class); // Initialize the logger
        helper("form");
        helper('file');
    }

    public function index()
    {
        if (!session()->has('logged_user')) {
            return redirect()->to(base_url());
        }

        $data["properties"] = $this->pModel->getPropertyLists();

        return view("propertylist/v_propertylist", $data);
    }

    public function addProperty()
    {
        $region = $this->locModel->selectData("region");
        $data['regions'] = $region;
        $data['validation'] = null;
        $pDescContent = $this->request->getVar('p_desc');

        $rules = [
            'p_type' => 'required',
            'p_class' => 'required',
            'p_status' => 'required',
            'ribbon' => 'required',
            'furnish' => 'required',
            'fc_status' => 'required',
            'list_type' => 'required',
            'p_feature' => 'required',
            'v_status' => 'required',
            // Property Description
            'p_title' => 'required',
            'p_code' => 'required|is_unique[property_list.p_code]',
            // Additional Descriptions
            'lot_area' => 'required',
            'floor_area' => 'required',
            'address' => 'required',
            // Property Location
            'region_id' => 'required',
            'province_id' => 'required',
            'municipality_id' => 'required',
        ];
        if ($this->request->getMethod() == "post") {
            if ($this->validate($rules))
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
                    'region_id' => $this->request->getVar('region_id'),
                    'province_id' => $this->request->getVar('province_id'),
                    'municipality_id' => $this->request->getVar('municipality_id'),
                ];
            // File validation passed; process the image upload and database insertion.
            $imageData = [];
            foreach ($this->request->getFiles()['images'] as $file) {
                if ($file->isValid() && !$file->hasMoved()) {
                    $newName = $file->getRandomName();
                    $file->move(FCPATH . 'public/contentuploads', $newName);
                    $path = base_url('public/contentuploads/' . $newName);

                    // Save information about the uploaded image
                    $imageData[] = [
                        'image_link' => $path,
                        'p_code' => $propertyData['p_code'],
                    ];
                } else {
                    $errorMessage = 'File validation failed for ' . $file->getName();
                    $this->logger->error($errorMessage);

                    session()->setTempdata('error', 'Property Not Created');
                    return redirect()->to(current_url());
                }
            }

            // Insert images into the database
            try {
                $this->pModel->insertImages($imageData);
                $this->pModel->insertPropertylists($propertyData);
            } catch (\Exception $e) {
                $this->logger->error('Error inserting images into the database: ' . $e->getMessage());
                session()->setTempdata('error', 'Property Not Created');
                return redirect()->to(current_url());
            }
            session()->setTempdata('success', 'Property Created Successfully');
            return redirect()->to(base_url('propertylist'));

        } else {
            $data['validation'] = $this->validator;
        }

        return view("propertylist/v_addproperty", $data);
    }
    public function editProperty($id)
    {
        $region = $this->locModel->selectData("region");
        $data['regions'] = $region;
        $data['properties'] = $this->pModel->getPropertyListsById($id);
        //Province
        $provinceId = $data['properties']->province_id;
        $prov_data = $this->locModel->selectProvince($provinceId);
        $data['prov_data'] = $prov_data;
        //Municipality
        $muniId = $data['properties']->municipality_id;
        $muni_data = $this->locModel->selectMunicipality($muniId);
        $data['muni_data'] = $muni_data;
        //Image links
        $getPCode = $data['properties']->p_code;
        $pCode = $this->pModel->getImagesByPropertyCode($getPCode);
        $data['images'] = $pCode;

        $data['validation'] = null;
        $pDescContent = $this->request->getVar('p_desc');
        
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
                ];
                // File validation passed; process the image upload and database insertion.
                $imageData = [];
                foreach ($this->request->getFiles()['images'] as $file) {
                    if ($file->isValid() && !$file->hasMoved()) {
                        $newName = $file->getRandomName();
                        $file->move(FCPATH . 'public/contentuploads', $newName);
                        $path = base_url('public/contentuploads/' . $newName);

                        // Save information about the uploaded image
                        $imageData[] = [
                            'image_link' => $path,
                            'p_code' => $this->request->getVar('p_code'),
                        ];
                    } else {
                        $errorMessage = 'File validation failed for ' . $file->getName();
                        $this->logger->error($errorMessage);

                        session()->setTempdata('error', 'Property Not Created');
                        return redirect()->to(current_url());
                    }
                }
                // Insert images into the database
                try {
                    $this->pModel->updatePropertylists($propertyData, $id);
                    $this->pModel->insertImages($imageData);
                } catch (\Exception $e) {
                    $this->logger->error('Error inserting images into the database: ' . $e->getMessage());
                    session()->setTempdata('error', 'Property Not Created');
                    return redirect()->to(current_url());
                }
                session()->setTempdata('success', 'Property Created Successfully');
                return redirect()->to(base_url('propertylist'));

            
        }

        return view("propertylist/v_editproperty", $data);
    }
    public function deleteImage()
    {
        // Call the deleteImage function from your model to delete the image from the database
        $imageLink = $this->request->getPost("iLink");
        $deleted = $this->pModel->deleteImage($imageLink);
        if ($deleted) {
            $response = ['success' => true, 'message' => 'Image deleted successfully'];
        } else {
            $response = ['success' => false, 'message' => 'Failed to delete the image'];
        }

        // Return the response as JSON
        return $this->response->setJSON($response);
    }

    public function deleteProperty($id)
    {
        if($this->pModel->deletePropertyById($id))
        {
            return redirect()->to(base_url('propertylist'));
        }else
        {
            echo "error";
        }
        return;
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
}