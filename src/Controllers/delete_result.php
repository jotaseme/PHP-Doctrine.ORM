<?php

require_once __DIR__ . '/../../bootstrap.php';
$root = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';

$entityManager = getEntityManager();
$resultRepository = $entityManager->getRepository('MiW16\Results\Entity\Result');
/** @var \MiW16\Results\Entity\Result $result */
$result = $resultRepository->find($id);

if($result){
    $entityManager->remove($result);
    $entityManager->flush();
    header('Location: '.$root.'results');
    die();

}else{
    echo "Ha ocurrido un error";
}