<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

service('auth')->routes($routes);
$routes->get('/', 'Home::index');
$routes->get('/logout', 'Home::logout');
$routes->get('/dashboarduser', 'Dashboard\Users::index');
$routes->get('/dashboardadmin', 'Dashboard\Admins::index');
$routes->get('/profile', 'Dashboard\Profile::index');

// $routes->get('/dashboard','MainDashboard::index');


