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
    
    <figure><img src="<?=$fila['IMAGEN'] ?>" alt=""></figure>
    <p id='contenido'><?=$fila['HASHTAG'] ?> <?=$fila['CONTENIDO'] ?></p>
    <p id='usuario'><?=$fila['USUARIO'] ?>   <?=$fila['FECHA'] ?></p>
    <P id='aplicacion'><?=$fila['APLICACION'] ?></P>
  <?php } ?>
</div>
