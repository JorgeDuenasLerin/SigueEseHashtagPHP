<?php

require("testGeneral.php");

$datos = ConfiguracionUsuarioManager::updateEmail(1,"carlosherrera@gmail.com");

$datos = UsuarioManager::getAll();

print_r($datos);

?>
