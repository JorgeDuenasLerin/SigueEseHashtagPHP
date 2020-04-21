<?php

require("testGeneral.php");

$datos = UsuarioManager::insert("Paloma","5d4f544f54df4d54f5","paloma@gmail.com");

$datos = UsuarioManager::getAll();

print_r($datos);

?>
