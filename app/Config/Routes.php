<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

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
$routes->get('/statistik_sektoral/dashboard', 'StatistikSektoral::dashboard');

$routes->get('/desa_cantik', 'DesaCantik::index');
$routes->get('/desa_cantik/manage', 'DesaCantik::manage');
$routes->get('/desa_cantik/create', 'DesaCantik::create');
$routes->post('/desa_cantik/store', 'DesaCantik::store');
$routes->get('/desa_cantik/edit/(:num)', 'DesaCantik::edit/$1');
$routes->post('/desa_cantik/update/(:num)', 'DesaCantik::update/$1');
$routes->get('/desa_cantik/delete/(:num)', 'DesaCantik::delete/$1');
$routes->get('/desa_cantik/export_xlsx', 'DesaCantik::exportExcel');
$routes->get('/desa_cantik/pembinaan', 'DesaCantik::pembinaan');
$routes->get('/desa_cantik/dokumen', 'DesaCantik::dokumen');
$routes->get('/desa_cantik/dashboard', 'DesaCantik::dashboard');

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

// Digistat Desa Cantik
$routes->get('digistatdescan/modul1', 'DigistatDescan::modul1');
$routes->get('digistatdescan/pretest1', 'DigistatDescan::pretest1');
$routes->post('digistatdescan/submitPretest1', 'DigistatDescan::submitPretest1');
$routes->get('digistatdescan/materi1', 'DigistatDescan::materi1');
$routes->get('digistatdescan/posttest1', 'DigistatDescan::posttest1');
$routes->post('digistatdescan/submitPosttest1', 'DigistatDescan::submitPosttest1');

$routes->get('digistatdescan/modul2', 'DigistatDescan::modul2');
$routes->get('digistatdescan/pretest2', 'DigistatDescan::pretest2');
$routes->post('digistatdescan/submitPretest2', 'DigistatDescan::submitPretest2');
$routes->get('digistatdescan/materi2', 'DigistatDescan::materi2');
$routes->get('digistatdescan/posttest2', 'DigistatDescan::posttest2');
$routes->post('digistatdescan/submitPosttest2', 'DigistatDescan::submitPosttest2');

$routes->get('digistatdescan/modul3', 'DigistatDescan::modul3');
$routes->get('digistatdescan/pretest3', 'DigistatDescan::pretest3');
$routes->post('digistatdescan/submitPretest3', 'DigistatDescan::submitPretest3');
$routes->get('digistatdescan/materi3', 'DigistatDescan::materi3');
$routes->get('digistatdescan/posttest3', 'DigistatDescan::posttest3');
$routes->post('digistatdescan/submitPosttest3', 'DigistatDescan::submitPosttest3');

$routes->get('digistatdescan/modul4', 'DigistatDescan::modul4');
$routes->get('digistatdescan/pretest4', 'DigistatDescan::pretest4');
$routes->post('digistatdescan/submitPretest4', 'DigistatDescan::submitPretest4');
$routes->get('digistatdescan/materi4', 'DigistatDescan::materi4');
$routes->get('digistatdescan/posttest4', 'DigistatDescan::posttest4');
$routes->post('digistatdescan/submitPosttest4', 'DigistatDescan::submitPosttest4');

$routes->get('digistatdescan/modul5', 'DigistatDescan::modul5');
$routes->get('digistatdescan/pretest5', 'DigistatDescan::pretest5');
$routes->post('digistatdescan/submitPretest5', 'DigistatDescan::submitPretest5');
$routes->get('digistatdescan/materi5', 'DigistatDescan::materi5');
$routes->get('digistatdescan/posttest5', 'DigistatDescan::posttest5');
$routes->post('digistatdescan/submitPosttest5', 'DigistatDescan::submitPosttest5');

$routes->post('descanklaim/simpan1', 'Klaim::descansimpan1');
$routes->get('descanklaim/pdf1/(:num)', 'Klaim::descanpdf1/$1');
$routes->post('descanklaim/simpan2', 'Klaim::descansimpan2');
$routes->get('descanklaim/pdf2/(:num)', 'Klaim::descanpdf2/$1');
$routes->post('descanklaim/simpan3', 'Klaim::descansimpan3');
$routes->get('descanklaim/pdf3/(:num)', 'Klaim::descanpdf3/$1');

// $routes->get('pdf', 'PdfController::generate');
