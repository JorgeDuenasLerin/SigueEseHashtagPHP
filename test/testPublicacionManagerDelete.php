<?php

require("testGeneral.php");
$datos =PublicacionManager::delete(6);

$datos = PublicacionManager::getAll();

print_r($datos);

?>
