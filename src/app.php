<?php
use Symfony\Component\Routing;
use Symfony\Component\Routing\Route;

$routes = new Routing\RouteCollection();

$routes->add('users', new Route('/users'));
$routes->add('results', new Route('/results'));
$routes->add('home', new Route('/'));
$routes->add('edit_one_user', new Route('/users/{id}/edit'));
$routes->add('edit_one_result', new Route('/results/{id}/edit'));
$routes->add('save_one_user', new Route('/users/{id}/save'));
$routes->add('save_one_result', new Route('/results/{id}/save'));
$routes->add('delete_user', new Route('/users/{id}/delete'));
$routes->add('delete_result', new Route('/results/{id}/delete'));
$routes->add('create_user', new Route('/users/new'));
$routes->add('create_result', new Route('/results/new'));
$routes->add('save_created_user', new Route('/users/new_user'));
$routes->add('save_created_result', new Route('/results/new_result'));
$routes->add('show_one_user', new Route('/users/{id}'));
$routes->add('show_one_result', new Route('/results/{id}'));

return $routes;