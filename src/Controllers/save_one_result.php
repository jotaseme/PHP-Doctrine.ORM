<?php
require_once __DIR__ . '/../../bootstrap.php';
$root = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';


$entityManager = getEntityManager();
$resultRepository = $entityManager->getRepository('MiW16\Results\Entity\Result');
/** @var \MiW16\Results\Entity\Result $result */
$result = $resultRepository->find($id);

if($result){
    $username = $_POST["username"];
    $puntuacion = $_POST["puntuacion"];

  /*
   * Aqui se deberia añadir tratamiento de las variables que entran por POST
   *
   */

    $userRepository = $entityManager->getRepository('MiW16\Results\Entity\User');
    $user = $userRepository->findOneBy(array(
        'username' => $username
    ));

    if($user){
        $result->setUser($user);
        $result->setResult($puntuacion);

        $entityManager->flush();
        header('Location: '.$root.'results');
        die();
    }else{
        echo "No se ha encontrado ningún usuario con ese nombre";
    }



}else{
    echo "Ha ocurrido un error";
}




