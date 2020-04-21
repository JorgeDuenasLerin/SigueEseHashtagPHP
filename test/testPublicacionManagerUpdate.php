<?php

require("testGeneral.php");
/*NOMBRE,CONTENIDO,IMAGEN,FECHA,APLICACION*/
$datos = PublicacionManager::Update(1,"Paco","hola","imagen","25-04-2020 20:20:20","instagram");

$datos = PublicacionManager::getAll();

print_r($datos);

?>
