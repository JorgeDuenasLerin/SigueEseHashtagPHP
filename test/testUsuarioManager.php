<?php

require("testGeneral.php");

$datos = UsuarioManager::getAll();

/*$datos2 = UsuarioManager::autentificado("Juan");
print_r($datos2);
*/
print_r($datos);


?>
