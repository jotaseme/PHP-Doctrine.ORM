<?php
use MiW16\Results\Entity\User;

require_once __DIR__ . '/../../bootstrap.php';
$root = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';

$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];


/** @var \MiW16\Results\Entity\User $user */
$user = new User();
$user->setUsername($username);
$user->setEmail($email);
$user->setPassword($password);

$entityManager = getEntityManager();
$entityManager->persist($user);
$entityManager->flush();

header('Location: '.$root.'users');
die();





