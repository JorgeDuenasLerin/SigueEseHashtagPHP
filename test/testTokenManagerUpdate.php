<?php

require("testGeneral.php");

$datos = TokenManager::update(8,'manolo@gmail.com',55555551,1);

$datos = TokenManager::getAll();

print_r($datos);

?>
