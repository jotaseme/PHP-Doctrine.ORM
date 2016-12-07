<?php
require_once __DIR__ . '/../../bootstrap.php';

echo "<h1>Edici&oacute;n de usuario</h1>";

$entityManager = getEntityManager();

$userRepository = $entityManager->getRepository('MiW16\Results\Entity\User');
$user = $userRepository->find($id);

if($user){
   echo "JJAJAJ";
}else{
    echo "No existe usuario con la id: " . $id;
}
