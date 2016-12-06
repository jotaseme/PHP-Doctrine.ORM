<?php

require_once __DIR__ . '/../../bootstrap.php';

$entityManager = getEntityManager();

$resultRepository = $entityManager->getRepository('MiW16\Results\Entity\Result');
$results = $resultRepository->findAll();

if (in_array('--json', $argv)) {
    echo json_encode($results);
} else {
    $items = 0;
    echo PHP_EOL . sprintf("  %2d: %20s %30s %7s\n", 'Id', 'Usuario:', 'Puntuacion:', 'fecha:');
    /** @var \MiW16\Results\Entity\Result $result */
    foreach ($results as $result) {
        echo sprintf(
            '- %2d: %20s %30s %7s',
            $result->getId(),
            $result->getUser()->getUsername(),
            $result->getResult(),
            $result->getTime()->format("Y-m-d H:i:s")
        ),
        PHP_EOL;
        $items++;
    }

    echo "\nTotal: $items results.\n\n";
}
