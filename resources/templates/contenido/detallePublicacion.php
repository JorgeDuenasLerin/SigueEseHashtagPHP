<?php
global $ROOT;
global $config;
  if(isset($_GET['id'])){
    $id = $_GET['id'];
  }
$datos = PublicacionManager::getPublicacionIdByHashtag($id);
//as_debug($datos,'datos');
?>

<link rel="stylesheet" href="/css/detallePublicacion.css">
<?php foreach($datos as $fila ){?>
<h1 id='principal'># <?=$fila['NOMBRE']?></h1>
<div class="detallePublicacion">
    <?php if($fila['IMAGEN'] != 'null'){ ?>
      <figure><img src="<?=$fila['IMAGEN']?>" alt=""></figure>
    <?php }?>
    <h3 id='titulo'>Contenido</h3>
    <p id='contenido'><?=$fila['CONTENIDO'] ?></p>
    <h4 id='usuarioTitulo'>Usuario: </h4> <p id='usuario'> <?=$fila['USUARIO']?> </p>
    <h4 id='fechaTitulo'>Fecha: </h4> <p id='fecha'> <?=$fila['FECHA'] ?></p>
    <h4 id='aplicacionTitulo'>Aplicación: </h4> <p id='aplicacion'> <?=$fila['APLICACION']?></p>
  <?php } ?>
</div>
