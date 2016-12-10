<?php
require_once __DIR__ . '/../../bootstrap.php';

echo "<h1>Edici&oacute;n de usuario</h1>";

$entityManager = getEntityManager();
$userRepository = $entityManager->getRepository('MiW16\Results\Entity\User');

/** @var \MiW16\Results\Entity\User $user */
$user = $userRepository->find($id);

if($user){
    echo '<ul>ID: ' . $user->getId() . '</ul>';
    echo '<ul>Nombre: <input name="username" value="'. $user->getUsername() .'"></ul>';
    echo '<ul>Email: <input name="email" size="40" value="'. $user->getEmail() .'"></ul>';
    echo '<ul>Password: <input name="password" value="'. $user->getPassword() .'"></ul>';
}else{
    echo "No existe usuario con la id: " . $id;
}
