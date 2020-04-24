<?php

require("testGeneral.php");


$datos = HashpubManager::insert(2,3);

$datos = HashpubManager::getAll();

print_r($datos);

?>
