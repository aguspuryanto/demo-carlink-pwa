<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/proses', 'Home::proses');
$routes->get('/layanan', 'Home::layanan');
$routes->get('/history', 'Home::history');
$routes->get('/akun', 'Home::akun');