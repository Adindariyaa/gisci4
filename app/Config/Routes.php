<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home_user::index');
$routes->get('/home', 'Home::index');
$routes->get('/Home', 'Home::index');
$routes->get('/Home/viewMap', 'Home::viewMap');
$routes->get('/Home/circle', 'Home::circle');
$routes->get('/login', 'Home::login');
$routes->post('/login/loginProses', 'Home::prosesLogin');
$routes->get('/login', 'Auth::login');

$routes->get('/', 'User::index');
$routes->get('User/viewDetail/(:num)', 'User::viewDetail/$1');
$routes->get('/user/daftarLapangan', 'User::daftarLapangan');





$routes->get('/Lokasi/inputLokasi', 'Lokasi::inputLokasi');
$routes->post('/Lokasi/insertData', 'Lokasi::insertData');
$routes->get('/Lokasi/index', 'Lokasi::index');
$routes->get('/Lokasi/pemetaanLokasi', 'Lokasi::pemetaanLokasi');
$routes->get('/Lokasi/kecamatan', 'Lokasi::kecamatan');

$routes->group('Lokasi', function ($routes) {
    $routes->get('/', 'Lokasi::index'); // halaman daftar lokasi
    $routes->post('update/(:num)', 'Lokasi::update/$1'); // update data lokasi
    $routes->get('delete/(:num)', 'Lokasi::delete/$1'); // hapus data lokasi
    $routes->get('detail/(:num)', 'Lokasi::detail/$1'); // (opsional) jika masih ada halaman detail
});
