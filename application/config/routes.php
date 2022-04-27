<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

# SITE PAGES
$route['about-us']             = 'pages/about';
$route['services']             = 'pages/services';
$route['contact-us']           = 'pages/contact';
$route['newsletter']           = 'index/newsletter';
$route['get-a-quote']          = 'pages/get_a_quote';
$route['search']               = 'pages/search';
$route['product-detail/(:any)']= 'pages/product_detail/$1';
# ADMIN
$route['admin/login']                   = 'admin/index/login';
$route['admin/logout']                  = 'admin/index/logout';
$route['admin/meta-info']               = 'admin/Meta_info/index';
$route['admin/meta-info/manage']        = 'admin/Meta_info/manage';
$route['admin/meta-info/manage/(:any)'] = 'admin/Meta_info/manage/$1';
$route['admin/meta-info/delete/(:any)'] = 'admin/Meta_info/delete/$1';