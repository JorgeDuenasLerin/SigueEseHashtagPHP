<?php

$totalPublicaciones = count(PublicacionManager::getAll());

if($totalPublicaciones != 0 || $totalPublicaciones == 0){
  insercionEnBBDD();
}

?>
