<?php

require("testGeneral.php");


$datos = HashtagManager::insert("Algo", 1);

$datos = HashtagManager::getAll();

print_r($datos);

?>
