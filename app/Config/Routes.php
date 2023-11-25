<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setAutoRoute(true);
$routes->get('/', 'Home::index');

$myroutes = [];

// Home
$myroutes ['dashboard/login_activity'] = 'Admin\Dashboard::login_activity';
$myroutes ['propertylists/propertydetail/(:num)'] = 'Home\PropertyDetail::index/$1';
$myroutes ['staging'] = 'Home::staging';
$myroutes ['services'] = 'Home\Services::index';

//register routes
$myroutes ['register/activate/(:any)'] = 'Register::activate/$1';

// admin routes
$myroutes ['dashboard'] = 'Admin\Dashboard::index';
$myroutes ['dashboard/logout'] = 'Admin\Dashboard::logout';

//CMS
$myroutes['cms'] = 'Cms\Cms::index';
$myroutes['cms/homecontent'] = 'Cms\Cms::homeContent';
$myroutes['cms/homecontent/addcontent'] = 'Cms\Cms::addHeadContent';
$myroutes['cms/homecontent/edit/(:num)'] = 'Cms\Cms::editHeadContent/$1';
$myroutes['login_activity_all'] = 'Admin\Dashboard::login_activity_all';
// Admin Property listing
$myroutes['propertylist'] = 'Admin\Propertylist::index';
$myroutes['propertylist/addproperty'] = 'Admin\Propertylist::addProperty';
$myroutes['propertylist/editproperty/(:num)'] = 'Admin\Propertylist::editProperty/$1';
$myroutes['propertylist/deleteproperty/(:num)'] = 'Admin\Propertylist::deleteProperty/$1';
$myroutes['propertylist/deleteimage'] = 'Admin\Propertylist::deleteImage';
$myroutes['propertylist/province'] = 'Admin\propertylist::province';
$myroutes['propertylist/municipality'] = 'Admin\Propertylist::municipality';


$myroutes['addproperty'] = 'Admin\Addproperty::index';
//Staging process property

$myroutes['addpropertystaging'] = 'Admin\Propertystaging::addProperty';
$myroutes['uploadfiles'] = 'Admin\Propertystaging::uploadFiles';
$myroutes['propertystaging'] = 'Admin\Propertystaging::index';

//Editproperty.php

//Addproperty.php
$myroutes['addproperty/province'] = 'Admin\Addproperty::province';
$myroutes['addproperty/municipality'] = 'Admin\Addproperty::municipality';

$routes->map($myroutes);