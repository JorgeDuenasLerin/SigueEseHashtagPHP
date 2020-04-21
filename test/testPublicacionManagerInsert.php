<?php

require("testGeneral.php");
/*NOMBRE,CONTENIDO,IMAGEN,APLICACION*/

$datos =PublicacionManager::insert("Paco","hola","imagen","instagram");

$datos = PublicacionManager::getAll();

print_r($datos);

?>
