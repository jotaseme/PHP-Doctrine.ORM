<?php
require_once __DIR__ . '/../../bootstrap.php';
$root = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';

echo "<h1>Creaci&oacute;n de usuario</h1>";

echo '<form action='.$root . 'users/new_user method="POST">';

echo '<ul>Nombre: <input name="username"></ul>';
echo '<ul>Email: <input name="email" size="40"></ul>';
echo '<ul>Password: <input name="password"></ul>';

echo '<button>Create user</button>';
echo '</form>';


