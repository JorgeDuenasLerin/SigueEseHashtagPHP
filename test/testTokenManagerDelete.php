<?php

require("testGeneral.php");

$datos = TokenManager::delete(8);

$datos = TokenManager::getAll();

print_r($datos);

?>
