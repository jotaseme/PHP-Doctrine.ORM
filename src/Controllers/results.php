<?php

require_once __DIR__ . '/../../bootstrap.php';
$root = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';


echo "<h1> Lista de resultados</h1>";

$entityManager = getEntityManager();
$resultsRepository = $entityManager->getRepository('MiW16\Results\Entity\Result');

$results = $resultsRepository->findAll();

if(empty($results)){
    echo "No hay ningun resultado registrado";
}else{
    foreach ($results as $result) {
        echo  '<a href="'.$root.'results/'.$result->getId().'"><h3>ID:  '. $result->getId(). ' ' . ' Usuario: ' . $result->getUser()->getUsername() . ' Puntuacion: ' . $result->getResult() . '</h3></a>' . PHP_EOL ;
    }
}
echo '<hr/>';
echo ' <a href="'.$root . 'results/new"><button>New result</button></a>';

