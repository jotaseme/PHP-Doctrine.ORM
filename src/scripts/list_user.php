<?php   // src/scripts/list_users.php

require_once __DIR__ . '/../../bootstrap.php';



if ($argc < 2) {
    echo "$argv[0] <id_user>" . PHP_EOL;
    exit();
}
$entityManager = getEntityManager();

$user = $entityManager
    ->getRepository('MiW16\Results\Entity\User')
    ->findOneById($argv[1]);

if ($user) {
    if (in_array('--json', $argv)) {
        echo json_encode($user);
    } else {
        echo PHP_EOL . sprintf("  %2d: %20s %30s %7s\n", 'Id', 'Username:', 'Email:', 'Enabled:');
        /** @var \MiW16\Results\Entity\User $user */

        echo sprintf(
            '- %2d: %20s %30s %7s',
            $user->getId(),
            $user->getUsername(),
            $user->getEmail(),
            $user->getEnabled()
        ),
        PHP_EOL;
    }
}else{
    echo 'Usuario no encontrado';
}




