<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//
// use App\Controllers\Home;
// use App\Controllers\IndikatorStrategis;
// use App\Controllers\StatistikSektoral;
// use App\Controllers\DesaCantik;
// use App\Controllers\HaloPst;

$routes->get('/', 'Home::index');

$routes->get('/indikator_strategis', 'IndikatorStrategis::index');

$routes->get('/statistik_sektoral', 'StatistikSektoral::index');
$routes->get('/statistik_sektoral/manage', 'StatistikSektoral::manage');
$routes->get('/statistik_sektoral/create', 'StatistikSektoral::create');
$routes->post('/statistik_sektoral/store', 'StatistikSektoral::store');
$routes->get('/statistik_sektoral/edit/(:num)', 'StatistikSektoral::edit/$1');
$routes->post('/statistik_sektoral/update/(:num)', 'StatistikSektoral::update/$1');
$routes->get('/statistik_sektoral/delete/(:num)', 'StatistikSektoral::delete/$1');
$routes->get('/statistik_sektoral/export_xlsx', 'StatistikSektoral::exportExcel');
$routes->get('/statistik_sektoral/pembinaan', 'StatistikSektoral::pembinaan');
$routes->get('/statistik_sektoral/dokumen', 'StatistikSektoral::dokumen');

$routes->get('/desa_cantik', 'DesaCantik::index');
$routes->get('/desa_cantik/manage', 'DesaCantik::manage');
$routes->get('/desa_cantik/create', 'DesaCantik::create');
$routes->post('/desa_cantik/store', 'DesaCantik::store');
$routes->get('/desa_cantik/edit/(:num)', 'DesaCantik::edit/$1');
$routes->post('/desa_cantik/update/(:num)', 'DesaCantik::update/$1');
$routes->get('/desa_cantik/delete/(:num)', 'DesaCantik::delete/$1');
$routes->get('/desa_cantik/export_xlsx', 'DesaCantik::exportExcel');
$routes->get('/desa_cantik/dokumen', 'DesaCantik::dokumen');

$routes->group('', ['filter' => 'role:admin'], function ($routes) {
    $routes->get('/admin_dashboard', 'Admin::index');
    $routes->get('/admin/create', 'Admin::create');
    $routes->post('/admin/store', 'Admin::store');
    $routes->get('/admin/edit/(:num)', 'Admin::edit/$1');
    $routes->post('/admin/update/(:num)', 'Admin::update/$1');
    $routes->get('/admin/delete/(:num)', 'Admin::delete/$1');
    $routes->get('/register', 'AuthController::register');
    $routes->post('/register', 'AuthController::storeUser');
});

$routes->get('/profile', 'Profile::index', ['filter' => 'auth']);
$routes->post('/profile/update', 'Profile::updateProfile', ['filter' => 'auth']);
$routes->post('/profile/change-password', 'Profile::changePassword', ['filter' => 'auth']);

$routes->get('/login', 'AuthController::login');
$routes->post('/login', 'AuthController::authenticate');
$routes->get('/logout', 'AuthController::logout');
$routes->get('/unauthorized', function () {
    return view('errors/unauthorized');
});

$routes->get('/halo_pst', 'HaloPst::index');

$routes->get('/lms', 'Lms::index');
$routes->get('lms/pretest', 'Lms::pretest');
$routes->post('lms/submitPretest', 'Lms::submitPretest');
$routes->get('lms/materi', 'Lms::materi');
$routes->get('lms/posttest', 'Lms::posttest');
$routes->post('lms/submitPosttest', 'Lms::submitPosttest');
