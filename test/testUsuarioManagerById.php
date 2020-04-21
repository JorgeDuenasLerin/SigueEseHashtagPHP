<?php

require("testGeneral.php");

$datos = UsuarioManager::getById(2);

print_r($datos);

?>
