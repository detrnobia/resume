<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'ProfileController::index');

$routes->get('/editResume', 'ProfileController::edit');
$routes->post('/updateResume', 'ProfileController::update');