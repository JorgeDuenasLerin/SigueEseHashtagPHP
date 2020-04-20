<?php

require("testGeneral.php");

HashtagManager::insert(17,"Algo", 1);

$datos = HashtagManager::getAll();

print_r($datos);

?>
