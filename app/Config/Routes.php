<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'principal::index');


$route['default_controller'] = 'usuario/listar';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['usuario/agregar'] = 'usuario/agregar';
$route['usuario/listar'] = 'usuario/listar';
$route['usuario/editar/(:num)'] = 'usuario/editar/$1';
$route['usuario/actualizar/(:num)'] = 'usuario/actualizar/$1';
$route['usuario/borrar/(:num)'] = 'usuario/borrar/$1';

$route['default_controller'] = 'principal';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
