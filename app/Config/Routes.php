<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/edit-resume', 'Home::editResume');
$routes->post('/update-resume', 'Home::updateResume');
$routes->get('/resume', 'Home::getResume');
