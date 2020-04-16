<?php

//require("$ROOT/src/Manager/PublicacionManager.php");
/*

Información sacada de la base de datos

*/
/*$resultado = PublicacionManager::getAll();*/
$resultados = [
    ['algo11', 'valor12', 'cosa13'],
    ['algo21', 'valor22', 'cosa23'],
  ];
  print_r($resultados);

 ?>
<link rel="stylesheet" href="/css/inicio.css">
<h1>Pag1</h1>
<div class="inicio">
  Contenido 1
  <p>
    <pre>
      hola
    <?php
    foreach($resultados as $fila) {
      print_r($fila);
    }
    ?>
    </pre>
  </p>
  <!--aquí meteré las viñetas con div despues haremos un foreach para meter todos los hashtag

    <?php
    /*foreach($resultado as $fila){*/?>
          <div class="viñetas">
    <h1></h1>
    <img src="" alt="#coronavirus">
    <p>contenido referente al hashtag</p>
    <p>nombre del usuario</p> <p>fecha de la publicacion</p> <p>nombre de la aplicacion</p>
    </div>-->
</div>
