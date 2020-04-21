<?php

require("testGeneral.php");

$datos =PublicacionManager::getById(1);

print_r($datos);

?>
