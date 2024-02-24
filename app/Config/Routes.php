<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setAutoRoute(true);
$routes->get('/', 'Home::index');
$routes->set404Override('App\Controllers\Admin\Unauthorized::show404');
$routes->post('dropzone/upload', 'Admin\Propertystaging::insertDropzoneImageTemp');
$routes->post('dropzone/editupload', 'Admin\Propertystaging::editDropzoneStore');
$routes->post("dropzone/remove", "Admin\Propertystaging::deleteDropzoneImageTemp");
$routes->post("edit/remove", "Admin\Propertystaging::deleteImage");
// $routes->get('(:segment)/(:segment)', 'PropertyController::index/$1/$2');



$myroutes = [];
    
//User Routes
$myroutes ['dashboard'] = 'User\Dashboard::index';
$myroutes ['user/logout'] = 'User\Dashboard::logout';
$myroutes ['user/myprofile'] = 'User\Dashboard::myProfile';

//Contact
$myroutes ['contact'] = 'Contact::index';
$myroutes ['admin/inquiries'] = 'Admin\ServicesInquiry::index';
$myroutes ['admin/inquiries/(:num)'] = 'Admin\ServicesInquiry::viewInquiry';
$myroutes['admin/inquiries/delete/(:num)'] = 'Admin\ServicesInquiry::deleteInquiry';
// Home
$myroutes ['dashboard/login_activity'] = 'Admin\Dashboard::login_activity';
$myroutes ['property/(:segment)'] = 'Home\Property::propertyDetails/$1';

//add to favourite
$myroutes ['addtofavourite/(:segment)'] = 'Home\Property::addToFavorites/$1';
$myroutes ['send-request/(:segment)'] = 'Home\Property::sendInquiry/$1';
// $myroutes ['propertylists/propertydetail'] = 'Home\PropertyDetail::index';
//Property Inquiry
$myroutes ['inquiry-list'] = 'Admin\PropertyInquiry::index';
$myroutes ['inquiry-list/view/(:num)'] = 'Admin\PropertyInquiry::viewInquiry/$1';
$myroutes ['inquiry-list/delete/(:num)'] = 'Admin\PropertyInquiry::deleteInquiry/$1';

//Search Filter
$myroutes ['filtered-result/(:segment)/(:segment)/(:segment)/(:segment)/'] = 'Home\Property::filterProperties/$1/$2/$3/$4';

// $myroutes ['property'] = 'Home\Property::index';
$myroutes ['staging'] = 'Home::staging';
$myroutes ['services'] = 'Home\Services::index';
$myroutes ['affiliate'] = 'Home\Aboutus::affiliate'; 
$myroutes ['our-people'] = 'Home\Aboutus::ourPeople';
$myroutes ['testimonials'] = 'Home\Aboutus::testimonials';
$myroutes ['commendation'] = 'Home\Aboutus::commendation';
$myroutes ['blog'] = 'Home\Blog::index';
$myroutes ['blog-detail/(:segment)'] = 'Home\Blog::blogDetail/$1';
$myroutes ['email-sub'] = 'Home\EmailSubs::index';

//sell my property
$myroutes ['sell-my-property'] = 'Home\SellProperty::index';
$myroutes['property-sell'] = 'Admin\SellProperty::index';
$myroutes['property-sell/view/(:num)'] = 'Admin\SellProperty::viewSeller/$1';
$myroutes['property-sell/delete/(:num)'] = 'Admin\SellProperty::deleteSeller/$1';

//register routes USERS
$myroutes ['register/activate/(:any)'] = 'Register::activate/$1';
$myroutes ['register'] = 'Register::index';

//Login Routes USERS
$myroutes ['login'] = 'Login::index';
$myroutes ['loginwithgoogle'] = 'Login::loginWithGoogle';
$myroutes ['loginwithfb'] = 'Login::loginWithGoogle';

// admin routes
$myroutes ['admin/dashboard'] = 'Admin\Dashboard::index';
$myroutes ['dashboard/logout'] = 'Admin\Dashboard::logout';

//CMS
$myroutes['cms'] = 'Cms\HomeContent::index';
$myroutes['cms/homecontent'] = 'Cms\HomeContent::homeContent';
$myroutes['cms/homecontent/addcontent'] = 'Cms\HomeContent::addHeadContent';
$myroutes['cms/homecontent/edit/(:num)'] = 'Cms\HomeContent::editHeadContent/$1';
$myroutes['login_activity_all'] = 'Admin\Dashboard::login_activity_all';
$myroutes['cms/pagelist'] = 'Cms\TermsPolicy::index';
$myroutes['cms/edit/(:num)'] = 'Cms\TermsPolicy::editPage/$1';
$myroutes['cms/addpage'] = 'Cms\TermsPolicy::addPage';
$myroutes['cms/aboutus/employee/add'] = 'Cms\AboutUs::addEmployee';
$myroutes['cms/aboutus/employee/edit/(:num)'] = 'Cms\AboutUs::updateEmployee/$1';
$myroutes['cms/aboutus/employeelist'] = 'Cms\AboutUs::index';
$myroutes['cms/aboutus/remove-image'] = 'Cms\AboutUs::deleteImage'; //delete image employee
$myroutes['cms/blog/list'] = 'Cms\Blog::index';
$myroutes['cms/blog/add'] = 'Cms\Blog::addBlog';
$myroutes['cms/blog/edit/(:num)'] = 'Cms\Blog::updateBlog/$1';
//footer
$myroutes['privacy-policy'] = 'Home\Footer::privacyPolicy';


$myroutes['adminlist/add'] = 'Admin\Adminregister::addAdmin';
$myroutes['adminlist/edit'] = 'Admin\Adminregister::editAdmin';
$myroutes['admin/list'] = 'Admin\Adminregister::index';
$myroutes['admin/login'] = 'Admin\Adminlogin::index';
// custom errrors
$myroutes['unauthorized'] = 'Admin\Unauthorized::index';
$myroutes['not_available'] = 'Admin\Unauthorized::noProperty';


// Admin Property listing
$myroutes['propertylist'] = 'Admin\Propertylist::index';
$myroutes['propertylist/addproperty'] = 'Admin\Propertylist::addProperty';
$myroutes['propertylist/editproperty/(:num)'] = 'Admin\Propertylist::editProperty/$1';
$myroutes['propertylist/deleteproperty/(:num)'] = 'Admin\Propertylist::deleteProperty/$1';

// $myroutes['propertylist/deleteimage'] = 'Admin\Propertylist::deleteImage';
$myroutes['propertylist/province'] = 'Admin\Propertystaging::province';
$myroutes['propertylist/municipality'] = 'Admin\Propertystaging::municipality';


$myroutes['addproperty'] = 'Admin\Addproperty::index';
//Staging process property

$myroutes['addpropertystaging'] = 'Admin\Propertystaging::addProperty';
$myroutes['propertystaging/editproperty/(:num)'] = 'Admin\Propertystaging::editProperty/$1';
$myroutes['propertystaging/deleteproperty/(:num)'] = 'Admin\Propertystaging::deleteProperty/$1';


$myroutes['propertystaging'] = 'Admin\Propertystaging::index';

//Editproperty.php

// //Addproperty.php
// $myroutes['addproperty/province'] = 'Admin\Addproperty::province';
// $myroutes['addproperty/municipality'] = 'Admin\Addproperty::municipality';

$routes->map($myroutes);