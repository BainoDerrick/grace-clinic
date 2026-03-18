<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');
$routes->get('about', 'About::index');
$routes->get('services', 'Services::index');
$routes->get('doctors', 'Doctors::index');
$routes->get('contact', 'Contact::index');