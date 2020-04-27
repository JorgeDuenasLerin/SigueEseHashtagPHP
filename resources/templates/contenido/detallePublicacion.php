<?php 
  if(isset($_GET['id'])){
    $id = $_GET['id'];
  }
$datos = PublicacionManager::getById($id);
print_r($datos);


?>

<link rel="stylesheet" href="/css/detallePublicacion.css">

<h1>#EjemploPublicacion</h1>
<div class="detallePublicacion">
  <?php foreach($datos as $fila ){?>
    
    <figure><?=$fila['IMAGEN'] ?></figure>
    <p><?=$fila['HASHTAG'] ?> <?=$fila['CONTENIDO'] ?></p>
    <p><?=$fila['NOMBRE'] ?>   <?=$fila['FECHA'] ?></p>
    <P><?=$fila['APLICACION'] ?></P>
  <?php } ?>
</div>
