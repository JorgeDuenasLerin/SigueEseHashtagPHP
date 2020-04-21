<?php

require("testGeneral.php");

$datos = UsuarioManager::delete(3);

$datos = UsuarioManager::getAll();

print_r($datos);

?>
