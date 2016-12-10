<?php
require_once __DIR__ . '/../../bootstrap.php';
$root = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';

echo "<h1>Creaci&oacute;n de resultado</h1>";

echo '<form action='.$root . 'results/new_result method="POST">';

echo '<ul>Usuario: <input name="username"></ul>';
echo '<ul>Puntaciones: <input name="puntuacion"></ul>';

echo '<button>Create result</button>';
echo '</form>';


