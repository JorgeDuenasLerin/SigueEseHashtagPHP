<?php

require("testGeneral.php");

$datos = ConfiguracionUsuarioManager::updateContraseña(1,551235);

$datos = UsuarioManager::getAll();

print_r($datos);

?>
