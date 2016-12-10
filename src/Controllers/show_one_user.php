<?php
require_once __DIR__ . '/../../bootstrap.php';
$root = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';

echo "<h1>Detalle de usuario</h1>";

$entityManager = getEntityManager();

$userRepository = $entityManager->getRepository('MiW16\Results\Entity\User');
$user = $userRepository->find($id);

if($user){
    echo  "<h3>" . $user->getId(). " " . $user->getUsername() ."</h3>" . PHP_EOL ;
    echo $user->getEmail();
    echo ' <a href="'.$root . 'users/'.$user->getId().'/edit"><button>Edit user</button></a> ' . '<a href="'.$root . 'users/'.$user->getId().'/delete"><button>Delete user</button></a>';
}else{
    echo "No existe usuario con la id: " . $id;
}
