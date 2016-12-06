<?php

require_once __DIR__ . '/../../bootstrap.php';

if ($argc < 2) {
    echo "$argv[0] <id_result>" . PHP_EOL;
    exit();
}
$entityManager = getEntityManager();

/** @var \MiW16\Results\Entity\Result $result */
$result = $entityManager
    ->getRepository('MiW16\Results\Entity\Result')
    ->findOneById($argv[1]);

if ($result) {
    if (in_array('--json', $argv)) {
        echo json_encode($result);
    } else {
        echo PHP_EOL . sprintf("  %2d: %20s %30s %7s\n", 'Id', 'Usuario:', 'Puntuacion:', 'fecha:');


        echo sprintf(
            '- %2d: %20s %30d %7s',
            $result->getId(),
            $result->getUser()->getUsername(),
            $result->getResult(),
            $result->getTime()->format("Y-m-d H:i:s")
        ),
        PHP_EOL;
    }
}else{
    echo 'Resulado no encontrado';
}




