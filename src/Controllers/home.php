<?php
$root = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';

echo '<h1><a href="'.$root . 'users">Usuarios</a></h1>';
echo '<h1><a href="'.$root . 'results">Resultados</a></h1>';