<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
$routes->setAutoRoute(True);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.\

//Route Tampilan Awal
$routes->get('/', 'beranda::index');
$routes->get('/about', 'beranda::about');
$routes->get('/contact', 'beranda::contact');
$routes->get('/register1', 'beranda::register');

//$routes->get('/admin/index', 'Admin::index', ['filter' => 'role:admin']);
$routes->get('/welcome', 'beranda::dashboard');
$routes->get('/account', 'account::index');
$routes->get('/suhulist', 'suhukelembapan::index');

//menu untuk sesion admin
$routes->get('/admin', 'admin::index');
$routes->get('/bibitadmin', 'pembibitanAdmin::admin');
$routes->get('/userlist', 'admin::userlist');

//menu untuk session user
$routes->get('/user', 'user::index');
$routes->get('/bibitlist', 'pembibitanUser::index');




/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
