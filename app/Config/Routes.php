<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

service('auth')->routes($routes);
$routes->get('/', 'Home::index');
$routes->get('/logout', 'Home::logout');
$routes->get('/dashboarduser', 'Dashboard\Users::index');
// $routes->get('/dashboard.admin', 'Dashboard\Admins::index');
$routes->get('/dashboard','MainDashboard::index');


