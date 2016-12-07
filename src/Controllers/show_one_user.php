<?php
require_once __DIR__ . '/../../bootstrap.php';

echo "<h1>Detalle de usuario</h1>";

$entityManager = getEntityManager();

$userRepository = $entityManager->getRepository('MiW16\Results\Entity\User');
$user = $userRepository->find($id);

if($user){
    echo  "<h3>" . $user->getId(). " " . $user->getUsername() ."</h3>" . PHP_EOL ;
    echo $user->getEmail();
    echo ' <a href="http://localhost:8888/users/'.$user->getId().'/edit"><button>Edit user</button></a> ' . ' <button>Delete user</button>';
}else{
    echo "No existe usuario con la id: " . $id;
}
