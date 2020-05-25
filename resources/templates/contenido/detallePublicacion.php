<?php
global $ROOT;
global $config;
  if(isset($_GET['id'])){
    $id = $_GET['id'];
  }
$datos = PublicacionManager::getPublicacionIdByHashtag($id);
as_debug($datos,'datos');
?>

<link rel="stylesheet" href="/css/detallePublicacion.css">

<h1>#EjemploPublicacion</h1>
<div class="detallePublicacion">
  <?php foreach($datos as $fila ){?>

  <?php as_debug($fila['IMAGEN'],'imagen sadfgadsf ');?>
    <figure><img src="<?=$fila['IMAGEN']?>" alt=""></figure>
    <p id='contenido'><?=$fila['NOMBRE'] ?> <?=$fila['CONTENIDO'] ?></p>
    <p id='usuario'><?=$fila['USUARIO'] ?>   <?=$fila['FECHA'] ?></p>
    <p id='aplicacion'><?=$fila['APLICACION'] ?></p>
  <?php } ?>
</div>
