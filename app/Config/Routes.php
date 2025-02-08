<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

/* Named routes */
$routes->get('/about', 'Home::about', ['as' => 'about_us']);
