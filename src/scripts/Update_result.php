<?php

require_once __DIR__ . '/../../bootstrap.php';

if ($argc < 4) {
    echo "$argv[0] <id_result> <id_usuario> <resultado>" . PHP_EOL;
    exit();
}

$entityManager = getEntityManager();


/** @var \MiW16\Results\Entity\Result $result */
$result = $entityManager
    ->getRepository('MiW16\Results\Entity\Result')
    ->findOneById($argv[1]);
if($result){
    /** @var \MiW16\Results\Entity\User $user */
    $user = $entityManager
        ->getRepository('MiW16\Results\Entity\User')
        ->findOneById($argv[2]);
    if ($user) {

        $result->setUser($user);
        $result->setResult($argv[3]);
        $result->setTime(date_create('now'));
        $entityManager->flush();
    } else {
        echo 'Usuario no encontrado';
    }
}else{
    echo 'Resultado no encontrado';
}


