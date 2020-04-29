<?php

require("testGeneral.php");

$datos = UsuarioManager::update(1,"Paula","$2y$10$nbm5Inx.l3F/ik5RuZa0Qu49NaFtC5i6nyYvCFLcCye6xh6GeoV3O","paloma@gmail.com");

$datos = UsuarioManager::getAll();

print_r($datos);

?>
