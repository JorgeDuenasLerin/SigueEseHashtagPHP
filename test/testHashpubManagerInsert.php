<?php

require("testGeneral.php");


$datos = HashpubManager::insert(1,2);

$datos = HashpubManager::getAll();

print_r($datos);

?>
