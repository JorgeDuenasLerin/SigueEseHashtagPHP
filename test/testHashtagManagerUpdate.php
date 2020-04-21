<?php

require("testGeneral.php");

/*id nombre id_usuario*/
$datos = HashtagManager::update(1, "mostaza", 1);

$datos = HashtagManager::getAll();

print_r($datos);

?>
