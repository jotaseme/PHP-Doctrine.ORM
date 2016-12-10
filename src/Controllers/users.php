<?php
require_once __DIR__ . '/../../bootstrap.php';
$root = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';


echo "<h1> Lista de usuarios</h1>";

$entityManager = getEntityManager();

$userRepository = $entityManager->getRepository('MiW16\Results\Entity\User');
$users = $userRepository->findAll();
if(empty($users)){
    echo "No hay ningun usuario dado de alta";
}else{
    foreach ($users as $user) {
        echo  '<a href="'.$root.'users/'.$user->getId().'"><h3>'. $user->getId(). ' ' . $user->getUsername() .'</h3></a>' . PHP_EOL ;
        echo $user->getEmail();
    }
}
