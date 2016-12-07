<?php
use Symfony\Component\Routing;

$routes = new Routing\RouteCollection();
$routes->add('users', new Routing\Route('/users'));
$routes->add('show_one_user', new Routing\Route('/users/{id}'));
$routes->add('edit_one_user', new Routing\Route('/users/{id}/edit'));
return $routes;