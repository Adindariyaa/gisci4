<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home_user::index');
$routes->get('/home', 'Home::index');
$routes->get('/Home', 'Home::index');
$routes->get('/Home/viewMap', 'Home::viewMap');
$routes->get('/Home/circle', 'Home::circle');
$routes->get('/login', 'Home::login');
$routes->post('/login', 'Home::prosesLogin');


$routes->get('/Home_user/marker', 'Home_user::marker');
$routes->get('/Home_user', 'Home_user::index');
$routes->get('/Home_user/tentang', 'Home_user::tentang');
$routes->get('/Home_user/dashboard', 'Home_user::dashboard');

$routes->get('/Lokasi/inputLokasi', 'Lokasi::inputLokasi');
$routes->post('/Lokasi/insertData', 'Lokasi::insertData');
$routes->get('/Lokasi/index', 'Lokasi::index');
$routes->get('/Lokasi/pemetaanLokasi', 'Lokasi::pemetaanLokasi');
