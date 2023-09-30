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
$routes->setDefaultController('Login');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('home', 'Dashboard::index');
$routes->get('Login', 'Dashboard::Login');
$routes->get('historia', 'Dashboard::historia');
$routes->get('carga_historia', 'Dashboard::carga_historia');
$routes->get('carga_examenes', 'Dashboard::carga_examenes');
$routes->get('carga_ejercicios', 'Dashboard::carga_ejercicios');
$routes->get('carga_home', 'Dashboard::carga_home');
$routes->get('examenes', 'Dashboard::examenes');
$routes->get('usuarios_registrados', 'Dashboard::usuarios_registrados');
$routes->get('preguntas', 'Dashboard::preguntas');
$routes->get('indexjs', 'Dashboard::indexjs');
$routes->get('largo', 'Dashboard::largo');
$routes->get('ejercicios', 'Dashboard::ejercicios');
$routes->get('lenguajes_usados', 'Dashboard::lenguajes_usados');

/*IMAGENES*/
$routes->get('img1', 'Dashboard::img1');
$routes->get('img2', 'Dashboard::img2');
$routes->get('img3', 'Dashboard::img3');
$routes->get('img4', 'Dashboard::img4');

/*VIDEOS*/
$routes->get('Ejercicio_1', 'Dashboard::Ejercicio_1');
$routes->get('Ejercicio_2', 'Dashboard::Ejercicio_2');


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
