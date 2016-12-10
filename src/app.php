<?php
use Symfony\Component\Routing;
use Symfony\Component\Routing\Route;

$routes = new Routing\RouteCollection();

$routes->add('users', new Route('/users'));

$routes->add('edit_one_user', new Route('/users/{id}/edit'));
$routes->add('save_one_user', new Route('/users/{id}/save'));
$routes->add('delete_user', new Route('/users/{id}/delete'));
$routes->add('create_user', new Route('/users/new'));
$routes->add('save_created_user', new Route('/users/new_user'));
$routes->add('show_one_user', new Route('/users/{id}'));

return $routes;