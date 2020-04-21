<?php

require("testGeneral.php");

$datos = TokenManager::insert("pepito@hotmail.com" ,1111111111,3);

$datos = TokenManager::getAll();

print_r($datos);

?>
