<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomeController::index');

$routes->get('about', 'AboutController::index');
$routes->get('exhibits', 'ExhibitsController::index');
$routes->get('contact', 'ContactController::index');
$routes->get('/cms/login', 'AuthController::cmsLogin');

$routes->get('/cms/register', 'CmsRegisterController::index'); // Show registration form
$routes->post('/cms/register', 'CmsRegisterController::register'); // Handle form submission


$routes->post('/auth/processLogin', 'AuthController::processLogin');
$routes->get('/cms/admin_dashboard', 'CMSController::adminDashboard', ['filter' => 'authGuard']);
$routes->get('/auth/logout', 'AuthController::logout');
$routes->get('cms/dashboard', 'CMSController::contentManagerDashboard',['filter' => 'authGuard']);

//Protect Routes with the Filter

//add update and delete content managers from admin dashboard
$routes->post('/cms/addContentManager', 'CMSController::addContentManager');
$routes->get('cms/editContentManager/(:num)', 'CMSController::editContentManager/$1');
$routes->post('/cms/updateContentManager/(:num)', 'CMSController::updateContentManager/$1');
$routes->get('/cms/deleteContentManager/(:num)', 'CMSController::deleteContentManager/$1');

//add update and delete exhibits from admin dashboard
$routes->get('exhibits', 'ExhibitsController::view_Exhibits');

$routes->post('cms/exhibits/add', 'ExhibitsController::addExhibit');

$routes->get('/cms/exhibits/edit/(:segment)', 'CMSController::editExhibit/$1');
$routes->post('/cms/exhibits/update/(:segment)', 'CMSController::updateExhibit/$1');


$routes->get('image/(:any)', 'ImageController::view/$1');
