<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'dashboard';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;



// $route['signup'] = "pages/pricing";
// $route['signup/(:any)'] = "merchants/signup/$1";
$route['logout']     =  "login/logout";

// $route['api']        =  "pages/api";
// $route['faq']        =  "pages/faq";
// $route['how']        =  "pages/how";
// $route['hepl']       =  "pages/help";
// $route['join']       =  "merchants/signup";
// $route['plans']      =  "pages/pricing";
// $route['pricing']    =  "pages/pricing";
// $route['customers']  =  "pages/customers";

// $route['tos']         =  "pages/tos";
// $route['loyalty']     =  "pages/loyalty";
// $route['engagements'] =  "pages/engagements";
// $route['listing']     =  "pages/listing";
// $route['(:num)']     =  "merchants/shortcode/$1";
// $route['(:num)/subscribe']     =  "merchants/shortcode/$1/subscribe";

// $route['location/search'] = "merchants/search_location";



// $route['merchants/(:any)'] = "merchants/index/$1";
// $route['merchants/refer(:any)'] = "merchants/refer/$1";
// $route['merchants/(:any)/(:any)'] = "merchants/profile/$1";
// $route['merchants/(:any)/(:any)/refer'] = "merchants/refer/$1";
// $route['merchants/(:any)/(:any)/subscribe'] = "merchants/subscribe/$1";

// $route['merchants/(:any)'] = "merchants/profile/$1";
// $route['activate/(:any)'] = "register/activate/$1";
