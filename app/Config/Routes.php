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

$routes->get('digistat/modul1', 'Digistat::modul1');
$routes->get('digistat/pretest1', 'Digistat::pretest1');
$routes->post('digistat/submitPretest1', 'Digistat::submitPretest1');
$routes->get('digistat/materi1', 'Digistat::materi1');
$routes->get('digistat/posttest1', 'Digistat::posttest1');
$routes->post('digistat/submitPosttest1', 'Digistat::submitPosttest1');

$routes->get('digistat/modul2', 'Digistat::modul2');
$routes->get('digistat/pretest2', 'Digistat::pretest2');
$routes->post('digistat/submitPretest2', 'Digistat::submitPretest2');
$routes->get('digistat/materi2', 'Digistat::materi2');
$routes->get('digistat/posttest2', 'Digistat::posttest2');
$routes->post('digistat/submitPosttest2', 'Digistat::submitPosttest2');

$routes->get('digistat/modul3', 'Digistat::modul3');
$routes->get('digistat/pretest3', 'Digistat::pretest3');
$routes->post('digistat/submitPretest3', 'Digistat::submitPretest3');
$routes->get('digistat/materi3', 'Digistat::materi3');
$routes->get('digistat/posttest3', 'Digistat::posttest3');
$routes->post('digistat/submitPosttest3', 'Digistat::submitPosttest3');

$routes->get('digistat/modul4', 'Digistat::modul4');
$routes->get('digistat/pretest4', 'Digistat::pretest4');
$routes->post('digistat/submitPretest4', 'Digistat::submitPretest4');
$routes->get('digistat/materi4', 'Digistat::materi4');
$routes->get('digistat/posttest4', 'Digistat::posttest4');
$routes->post('digistat/submitPosttest4', 'Digistat::submitPosttest4');

$routes->get('digistat/modul5', 'Digistat::modul5');
$routes->get('digistat/pretest5', 'Digistat::pretest5');
$routes->post('digistat/submitPretest5', 'Digistat::submitPretest5');
$routes->get('digistat/materi5', 'Digistat::materi5');
$routes->get('digistat/posttest5', 'Digistat::posttest5');
$routes->post('digistat/submitPosttest5', 'Digistat::submitPosttest5');

$routes->post('klaim/simpan1', 'Klaim::simpan1');
$routes->get('klaim/pdf1/(:num)', 'Klaim::pdf1/$1');
$routes->post('klaim/simpan2', 'Klaim::simpan2');
$routes->get('klaim/pdf2/(:num)', 'Klaim::pdf2/$1');
$routes->post('klaim/simpan3', 'Klaim::simpan3');
$routes->get('klaim/pdf3/(:num)', 'Klaim::pdf3/$1');
$routes->post('klaim/simpan4', 'Klaim::simpan4');
$routes->get('klaim/pdf4/(:num)', 'Klaim::pdf4/$1');
$routes->post('klaim/simpan5', 'Klaim::simpan5');
$routes->get('klaim/pdf5/(:num)', 'Klaim::pdf5/$1');

$routes->get('pdf', 'PdfController::generate');
