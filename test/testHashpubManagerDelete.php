<?php

require("testGeneral.php");

$datos = HashpubManager::delete(1);

$datos = HashpubManager::getAll();

print_r($datos);

?>
