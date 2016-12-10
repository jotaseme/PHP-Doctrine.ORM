<?php
require_once __DIR__ . '/../../bootstrap.php';
$root = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';

echo "<h1>Edici&oacute;n de resultado</h1>";

$entityManager = getEntityManager();
$userRepository = $entityManager->getRepository('MiW16\Results\Entity\Result');

/** @var \MiW16\Results\Entity\Result $result */
$result = $userRepository->find($id);

if($result){
    echo '<form action='.$root . 'results/'.$result->getId().'/save method="POST">';
    echo '<ul>ID: ' . $result->getId() . '</ul>';
    echo '<ul>Nombre de usuario: <input name="username" value="'. $result->getUser()->getUsername() .'"></ul>';
    echo '<ul>Puntuacion: <input name="puntuacion" value="'. $result->getResult() .'"></ul>';

    echo '<button>Save changes</button>';
    echo '</form>';
}else{
    echo "No existe resultado con la id: " . $id;
}
