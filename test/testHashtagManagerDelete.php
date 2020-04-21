<?php

require("testGeneral.php");

$datos = HashtagManager::delete(4);

$datos = HashtagManager::getAll();

print_r($datos);

?>
