<?php
use MiW16\Results\Entity\Result;

require_once __DIR__ . '/../../bootstrap.php';
$root = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';

$username = $_POST["username"];
$puntuacion = $_POST["puntuacion"];

$entityManager = getEntityManager();
/** @var \MiW16\Results\Entity\User $user */
$userRepository = $entityManager->getRepository('MiW16\Results\Entity\User');
$user = $userRepository->findOneBy(array(
    'username' => $username
));

if($user){
    $result = new Result($puntuacion,$user,date_create('now'));

    $entityManager->persist($result);
    $entityManager->flush();
    header('Location: '.$root.'results');
    die();
}else{
    echo "No se ha encontrado ningún usuario con ese nombre";
}






