<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('/students', 'Students::index');
$routes->get('/students/create', 'Students::create');
$routes->post('api/students', 'Api\Students::create');
