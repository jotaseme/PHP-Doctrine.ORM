<?php
require_once __DIR__ . '/../../bootstrap.php';
$root = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';

echo "<h1>Detalle de partida</h1>";

$entityManager = getEntityManager();

$resultRepository = $entityManager->getRepository('MiW16\Results\Entity\Result');
$result = $resultRepository->find($id);

if($result){
    echo  "<h3>#" . $result->getId(). " Usuario: " . $result->getUser()->getUsername() ."</h3>" . PHP_EOL ;
    echo "<h4>Resultado: " . $result->getResult() . "</h4>";
    echo "<h4>Fecha: " . $result->getTime()->format('Y-m-d H:i:s') . "</h4>";
    echo ' <a href="'.$root . 'results/'.$result->getId().'/edit"><button>Edit result</button></a> ' . '<a href="'.$root . 'results/'.$result->getId().'/delete"><button>Delete result</button></a>';
}else{
    echo "No existe resultado con la id: " . $id;
}
