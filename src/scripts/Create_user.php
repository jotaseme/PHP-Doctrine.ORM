<?php

use MiW16\Results\Entity\User;

require_once __DIR__ . '/../../bootstrap.php';


if ($argc < 4) {
    echo "$argv[0] <username> <email> <password>" . PHP_EOL;
    exit();
}

/** @var \MiW16\Results\Entity\User $user */
$user = new User();
$user->setUsername($argv[1]);
$user->setEmail($argv[2]);
$user->setPassword($argv[3]);

$em = GetEntityManager();
$em->persist($user);
$em->flush();