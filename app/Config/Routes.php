<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

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
$routes->get('ejercicios_2', 'Dashboard::ejercicios_2');
$routes->get('calculadoras', 'Dashboard::calculadoras');
$routes->get('lenguajes_usados', 'Dashboard::lenguajes_usados');

/*IMAGENES*/
$routes->get('img1', 'Dashboard::img1');
$routes->get('img2', 'Dashboard::img2');
$routes->get('img3', 'Dashboard::img3');
$routes->get('img4', 'Dashboard::img4');

/*VIDEOS*/
$routes->get('Ejercicio_1', 'Dashboard::Ejercicio_1');
$routes->get('Ejercicio_2', 'Dashboard::Ejercicio_2');

/*ESTILOS*/


/*CODIGO JAVASCRIPT*/