<?php

use MiW16\Results\Entity\Result;

require_once __DIR__ . '/../../bootstrap.php';


if ($argc < 3) {
    echo "$argv[0] <id_user> <result>" . PHP_EOL;
    exit();
}
$entityManager = getEntityManager();

/** @var \MiW16\Results\Entity\User $user */
$user = $entityManager
    ->getRepository('MiW16\Results\Entity\User')
    ->findOneById($argv[1]);

if ($user) {
    /** @var \MiW16\Results\Entity\Result $result */
    $result = new Result(intval($argv[2]),$user,date_create('now'));
    $entityManager->persist($result);
    $entityManager->flush();
}else{
    echo 'Usuario no encontrado';
}
