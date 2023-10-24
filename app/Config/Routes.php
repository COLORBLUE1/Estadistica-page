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
$routes->get('estadistica_2', 'Dashboard::estadistica_2');
$routes->get('ejercicios_probabilidad', 'Dashboard::ejercicios_probabilidad');
$routes->get('ejercicios_class_variable', 'Dashboard::ejercicios_class_variable');
