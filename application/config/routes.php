<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['garages/create'] = 'garages/create';
$route['garages/(:any)'] = 'garages/view/$1';
$route['garages'] = 'garages/index';
$route['vehicles'] = 'vehicles/index';
$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
