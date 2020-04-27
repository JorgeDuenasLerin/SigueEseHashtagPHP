<?php

require("testGeneral.php");

$datos = ConfiguracionUsuarioManager::updateNombre(1,"Carlos");

$datos = UsuarioManager::getAll();

print_r($datos);

?>
