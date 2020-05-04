<?php


  if(isset($_GET['id'])){
    $id = $_GET['id'];
  }
$datos = PublicacionManager::getPublicacionIdByHashtag($id);
print_r($datos);
as_debug($datos);


?>

<link rel="stylesheet" href="/css/detallePublicacion.css">

<h1>#EjemploPublicacion</h1>
<div class="detallePublicacion">
  <?php foreach($datos as $fila ){?>

    <figure><img src="<?=$fila['IMAGEN'] ?>.jpg" alt=""></figure>
    <p id='contenido'><?=$fila['NOMBRE'] ?> <?=$fila['CONTENIDO'] ?></p>
    <p id='usuario'><?=$fila['USUARIO'] ?>   <?=$fila['FECHA'] ?></p>
    <P id='aplicacion'><?=$fila['APLICACION'] ?></P>
  <?php } ?>
</div>
