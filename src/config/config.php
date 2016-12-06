<?php   // config/config.php

/*
 * configuración SGBD
 */
define('DATABASE_DBNAME', 'miw16_results');
define('DATABASE_USER', 'miw');
define('DATABASE_PASSWD', 'root');
define('DATABASE_DRIVER', 'pdo_mysql');
define('DATABASE_CHARSET', 'UTF8');

/*
 * configuración Doctrine
 */
define('PROXY_DIR', '/wamp/www/ResultsDoctrine/tmp');
define('ENTITY_DIR', __DIR__ . '/../Entity');
define('DEBUG', false);  // muestra consulta SQL por la salida estándar
