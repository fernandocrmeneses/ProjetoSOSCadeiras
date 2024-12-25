<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomeController::index');
$routes->get('/sosexpress', 'SOSExpressController::index');
$routes->get('/manutencao-preventiva', 'ManutencaoPreventivaController::index');
$routes->get('/manutencao-corretiva', 'ManutencaoCorretivaController::index');
