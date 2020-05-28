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
$route['default_controller']    = 'auth';
$route['404_override']          = 'auth/notfound';
$route['translate_uri_dashes']  = FALSE;

// Common
$route['user_guide']       = 'common/user_guide';
$route['contact']          = 'common/feedback';
$route['register']         = 'common/register';
$route['online_checking']  = 'common/online_checking';
$route['guide']            = 'common/guide';
$route['import']            = 'common/import';

//Patient
$route['welcome']                  = 'patient/dashboard';
$route['profile']                  = 'patient/profile';
$route['consult']                  = 'patient/service/consult';
$route['take_medicine']            = 'patient/service/take_medicine';
$route['chemo_scedule']            = 'patient/service/chemo_scedule';
$route['success_confirm']          = 'patient/service/success_confirm';
$route['results']                  = 'patient/service/results';
$route['control_result/(:any)']    = 'patient/service/control_result';
$route['feedback']                 = 'patient/feedback';
 
//Paramedic
$route['reserv_ns']                   = 'paramedic/reservation/nurse'; 
$route['reserv_dr']                   = 'paramedic/reservation/doctor'; 
$route['checkup_ns/(:any)/(:any)']    = 'paramedic/checkup/nurse'; 
$route['checkup_dr/(:any)/(:any)']    = 'paramedic/checkup/doctor'; 
$route['visite']                      = 'paramedic/checkup/visite';
$route['update_visite']               = 'paramedic/checkup/update_visite';
$route['followup']                    = 'paramedic/checkup/followup';
$route['update_followup']             = 'paramedic/checkup/update_followup';
$route['getPatient']                  = 'paramedic/patient';
$route['getDetailPatient/(:any)']     = 'paramedic/patient/detail_patient';
$route['contrest/(:any)/(:any)']      = 'paramedic/patient/control_result';

//Setting
$route['set_reservation']   = 'setting/reservation';
$route['set_users']         = 'setting/user';