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
|	https://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'As_maratha';

/*$route['(:any)'] = "Admin_panel/viewpage/$1";

$route['(:any)'] = "As_maratha/viewpage/$1";*/

/*-----------Shobha Kumbhar Matrimony Admin Routing----------*/

/*$route['grooms-list'] = "admin_panel/viewpage/admin_login";
$route['dashboard'] = "admin_panel/viewpage/dashboard";*/

$route['grooms-list'] = "admin_panel/grooms_list";
$route['brides-list'] = "admin_panel/brides_list";
$route['divorcee-girl'] = "admin_panel/divorcee_girl_list";
$route['divorcee-boy'] = "admin_panel/divorcee_boy_list";
$route['success-story'] = "admin_panel/success_story_list";
//$route['response-list'] = "admin_panel/response_list";

$route['groom-edit/(:any)'] = "admin_panel/groom_edit/$1";
$route['brides-edit/(:any)'] = "admin_panel/bride_edit/$1";
$route['divorcee-edit/(:any)'] = "admin_panel/divorcee_edit/$1";

$route['brid-save/(:any)'] = "admin_panel/brid_edit_save/$1";
$route['groom-save/(:any)'] = "admin_panel/groom_edit_save/$1";
$route['divcgirl-save/(:any)'] = "admin_panel/divorcee_edit_save/$1";
$route['activate-user/(:any)'] = "admin_panel/activate_user/$1";
$route['deactivate-user/(:any)'] = "admin_panel/deactivate_user/$1";
$route['add-story'] = "admin_panel/suc_story";
$route['edit-story/(:any)'] = "admin_panel/edit_story/$1";
$route['delete-user/(:any)'] = "admin_panel/delete-user/$1";

/*----------Shobha Kumbhar Matrimony site routing-------*/
$route['contact'] = 'As_maratha/contact';
$route['features'] = 'As_maratha/features';
$route['rules'] = 'As_maratha/rules';
$route['enroll'] = 'As_maratha/enroll';
$route['add-enroll'] = 'As_maratha/add_enroll';
$route['search'] = 'As_maratha/search';
$route['grooms'] = 'As_maratha/grooms';
$route['brides'] = 'As_maratha/brides';
$route['divorcee'] = 'As_maratha/divorcee';
$route['success'] = 'As_maratha/success';
$route['response'] = 'As_maratha/response';
$route['upload-profile'] = 'As_maratha/upload_profile';
$route['search-profile'] = 'As_maratha/search_profile';
$route['send-response'] = 'as_maratha/send_response';
$route['divc-girl'] = 'as_maratha/divc_girl';
$route['as-popup'] = 'as_maratha/as_popup';
$route['test'] = 'as_maratha/test';
$route['sessiontimeout'] = 'as_maratha/sessiontimeout';
$route['view-details/(:any)'] = 'enquiries/view_details/$1';
/* Edit By Ashwin */
$route['search-filters'] = 'As_maratha/search_filters';
$route['search-enrollno'] = 'As_maratha/search_enrollno';
$route['display-popup'] = 'As_maratha/display_popup';
$route['edit-profile'] = 'As_maratha/edit_profile';
$route['profile-photo/(:any)'] = 'As_maratha/save_prof_pic/$1';


$route['404_override'] = '';
$route['translate_uri_dashes'] = TRUE;
