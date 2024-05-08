<?php

namespace App\Controllers\Home;

use App\Models\DashboardModel;
use App\Models\FavouriteModel;
use CodeIgniter\Controller;
use App\Models\HomeModel;
use App\Models\PropertyModel;
use App\Models\PropertyInquiryModel;//propertyInquiries
use App\Models\BlogModel;

class Property extends Controller
{
    protected $hModel;
    protected $pModel;
    protected $fModel;
    protected $bModel;
    protected $session;
    protected $dModel;
    protected $pIModel;//propertyInquiries
    protected $email; // need to define email
    public function __construct()
    {
        helper("form");
        helper("number");
        helper("google");
        $this->pIModel = new PropertyInquiryModel();//propertyInquiries
        $this->fModel = new FavouriteModel();
        $this->hModel = new HomeModel();
        $this->pModel = new PropertyModel();
        $this->bModel = new BlogModel();
        $this->dModel = new DashboardModel();
        $this->email = \Config\Services::email(); // to call Service email
        $this->googleClient = instantiateGoogleClient();
        $this->session = \Config\Services::session();
    }
    public function index()
    {
        $data['googleButton'] = generateGoogleButton($this->googleClient);
        $data['is_logged_in'] = $this->session->get('logged_user') ? true : false;

        return view("home/v_propertyList", $data);
    }
    public function filterProperties($listType, $pType, $loc, $price)
    {

        $favourites = [];

        if (session()->has('logged_user')) {
            $userEmail = session()->get('logged_user');
            $favourites = $this->fModel->where('email', $userEmail)
                ->findAll();
        }


        if ($loc === 'location:any') {
            $loc = 'all';
        }
        if ($pType === 'property-type:any') {
            $pType = 'all';
        }
        if ($price === 'price:any') {
            $price = 'all';
        } else {
            // Extract min and max prices from the parameter
            $priceRange = explode('-', $price);

            // Make sure both min and max values are available
            if (count($priceRange) === 2) {
                $priceMin = $priceRange[0];
                $priceMax = $priceRange[1];
            }
        }

        // var_dump($loc, $pType, $price, $listType, $priceMin, $priceMax);
        $properties = $this->pModel->getFilteredProperties($listType, $loc, $pType, $price);
        $latestBlogs = $this->bModel->getRecentBlogPost();
        

        // Set up automatic pagination using CodeIgniter's built-in pager
        $perPage = 10;
        $currentPage = (int) ($this->request->getGet('page') ?? 1);

        // Paginate the array manually
        $startIndex = ($currentPage - 1) * $perPage;

        // to get paginated properties
        $paginatedProperties = array_slice($properties, $startIndex, $perPage);

        // Set up CodeIgniter's built-in pager
        $pager = service('pager');
        $data['featuredProperties'] = $this->pModel->getFeaturedPropertyListWithImages();
        $data['baseurl'] = base_url();
        $data['properties'] = $paginatedProperties;
        $data['page'] = $currentPage;
        $data['perPage'] = $perPage;
        $data['total'] = count($properties);
        $data['pager'] = $pager;

        $data['favourites'] = $favourites;
        $data['googleButton'] = generateGoogleButton($this->googleClient);
        $data['latestBlogs'] = $latestBlogs;
        $data['basUrl'] = base_url();
        $data['is_logged_in'] = $this->session->get('logged_user') ? true : false;

        $data['seo'] = "filtered-result/{$listType}/property-type:{$pType}/location:{$loc}/price:{$price}";
        $page_id = 4;
        $data['page_title'] = $this->hModel->getPageTitle($page_id);

        return view("home/v_propertyList", $data);
    }

    public function propertyDetails($slug)
    {
        $favourites = [];
        $properties = $this->pModel->getPropertyListsBySlug($slug);
        $getPCode = $properties->p_code;
        $this->pModel->incrementTotalViewsByPCode($getPCode);

        if (session()->has('logged_user')) {
            $userEmail = session()->get('logged_user');
            $favourites = $this->fModel->where('email', $userEmail)
                ->findAll();
            $this->pModel->incrementUserViewsByPCode($getPCode, $userEmail);
        }
        
        if (!$properties) {
            return redirect()->to(base_url('not_available'));
        }
        $data[] = null;
        // Get Property Data by ID

        //Image links
        
        $embedVideo = $this->pModel->getEmbedVideo($getPCode);
        $location = $this->pModel->getMapLocation($getPCode);
        $images = $this->pModel->getImagesByPropertyCode($getPCode);
        $data['images'] = $images;
        $data['properties'] = $properties;
        $data['baseurl'] = base_url();
        $data['embedVideo'] = $embedVideo;
        $data['location'] = $location;

        $data['googleButton'] = generateGoogleButton($this->googleClient);
        $data['is_logged_in'] = $this->session->get('logged_user') ? true : false;
        $data['favourites'] = $favourites;

        $data['seo'] = $properties;

        return view("home/v_property_detail", $data);
    }
    // Inside your Property controller 
    public function addToFavorites($propertyCode)
    {
        if (!session()->has('logged_user')) {
            // Handle the case where the user is not logged in
            return json_encode(['success' => false, 'message' => 'User not logged in']);
        }

        $userEmail = session()->get('logged_user');

        // Check if the property is already in the user's favorites
        $existingFavorite = $this->fModel->where('email', $userEmail)
            ->where('p_code', $propertyCode)
            ->first();

        if ($existingFavorite) {
            // Property is already in favorites, remove it
            $this->fModel->where('email', $userEmail)
                ->where('p_code', $propertyCode)
                ->delete();

            // Return the HTML content for the heart icon indicating it's not in favorites anymore
            $html = '<li class="list-inline-item">
                    <a href="#" class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-heading bg-white border-white bg-hover-primary border-hover-primary hover-white add-to-favorites"
                        data-property-code="' . $propertyCode . '" data-toggle="tooltip" title="Add to Wishlist">
                        <i class="far fa-heart"></i>
                    </a>
                </li>';

            return json_encode(['success' => true, 'message' => 'Removed from favorites', 'html' => $html]);
        }

        // Property is not in favorites, add it
        $this->fModel->insert([
            'p_code' => $propertyCode,
            'email' => $userEmail,
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        // Return the HTML content for the heart icon indicating it's in favorites now
        $html = '<li class="list-inline-item">
                <a href="#" class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-primary bg-accent border-accent add-to-favorites"
                    data-property-code="' . $propertyCode . '" data-toggle="tooltip" title="Remove from Wishlist">
                    <i class="fas fa-heart"></i>
                </a>
            </li>';

        return json_encode(['success' => true, 'message' => 'Added to favorites', 'html' => $html]);
    }
    public function sendInquiry($pCode)
    {
        $logged_user = $this->session->get('logged_user');
        $userdata = $this->dModel->getLoggedInUserData($logged_user);

        if (!$pCode) {
            // Handle the case when the property with the given code is not found
            return "Property not found";
        }

        $this->pIModel->insert([
            'full_name' => $userdata->full_name,
            'p_code' => $pCode,
            'email' => $logged_user,
            'phone' => $userdata->phone
        ]);

        $to = 'info@msg-homes.com';
        $subject = 'Property Inquiry - ' . $pCode; // Assuming you have a property_name field

        $message = 'New inquiry :<br><br>'
            . 'Property Code: ' . $pCode . "<br>"
            . 'Name: ' . $userdata->full_name . "<br>"
            . 'Email: ' . $logged_user . "<br>"
            . 'Phone: ' . ($userdata->phone ?? '') . "<br>"
            . 'Thanks,<br>Team.';

        $this->email->setTo($to);
        $this->email->setFrom('no-reply@msg-homes.com', 'Inquire from Website');
        $this->email->setSubject($subject);
        $this->email->setMessage($message);
        $this->email->setMailType('html');

        if ($this->email->send()) {
            // Handle success
            $to = $logged_user;
            $subject = 'Confirmation: Your Message has been Received';

            $message = 'Dear ' . $userdata->full_name . ",<br><br>"
                . 'We have successfully received your message. Here are the details:<br><br>'
                . 'Property Code' . $pCode . ", <br><br>"
                . 'Our team will get back to you as soon as possible. In the meantime, if you have any urgent inquiries, feel free to contact us directly at info@msg-homes.com.<br>'
                . 'Thanks,<br>My Saving Grace Realty Development & Corporation.';

            $this->email->setTo($to);
            $this->email->setFrom('no-reply@msg-homes.com', 'Inquire from Website');
            $this->email->setSubject($subject);
            $this->email->setMessage($message);
            $this->email->setMailType('html');

            $emailSent = $this->email->send();
            return json_encode(['success' => true, 'message' => 'Inquiry sent successfully']);
        } else {
            return json_encode(['success' => false, 'message' => 'Error sending inquiry']);
        }
    }
    
}



