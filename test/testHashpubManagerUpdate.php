<?php

require("testGeneral.php");

/*id nombre id_usuario*/
$datos = HashpubManager::update(6, 3 , 1);

$datos = HashpubManager::getAll();

print_r($datos);

?>
