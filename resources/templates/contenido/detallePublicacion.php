<?php 
  if(isset($_GET['id'])){
    $id = $_GET['id'];
  }
$datos = PublicacionManager::getById($id);
print_r($datos);


?>



<h1>#EjemploPublicacion</h1>
<div class="">
  <?php foreach($datos as $fila ){?>
    <P><?=$fila['APLICACION'] ?></P>
    <figure><?=$fila['IMAGEN'] ?></figure>
    <p><?=$fila['HASHTAG'] ?> <?=$fila['CONTENIDO'] ?></p>
    <p><?=$fila['NOMBRE'] ?>   <?=$fila['FECHA'] ?></p>
  <?php } ?>
</div>
