<?php

require_once __DIR__ . '/../../bootstrap.php';
$root = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';


$entityManager = getEntityManager();
$userRepository = $entityManager->getRepository('MiW16\Results\Entity\User');
/** @var \MiW16\Results\Entity\User $user */
$user = $userRepository->find($id);

if($user){
    $entityManager->remove($user);
    $entityManager->flush();
    header('Location: '.$root.'users');
    die();

}else{
    echo "Ha ocurrido un error";
}