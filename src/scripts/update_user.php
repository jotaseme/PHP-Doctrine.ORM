<?php

require_once __DIR__ . '/../../bootstrap.php';

if ($argc < 5) {
    echo "$argv[0] <id_user> <username> <email> <password>" . PHP_EOL;
    exit();
}

$entityManager = getEntityManager();
/** @var \MiW16\Results\Entity\User $user */
$user = $entityManager
    ->getRepository('MiW16\Results\Entity\User')
    ->findOneById($argv[1]);

if ($user) {
    $user->setUsername($argv[2]);
    $user->setEmail($argv[3]);
    $user->setPassword($argv[4]);

    $entityManager->flush();
} else {
    echo 'Usuario no encontrado';
}
