<?php

//require("$ROOT/src/Manager/PublicacionManager.php");
/*

Información sacada de la base de datos

*/
//$resultado = HashtagManager::getAll();
//$resultadoUser = UsuarioManager::getAll();


$resultados = [
    ['algo11', 'valor12', 'cosa13'],
    ['algo21', 'valor22', 'cosa23'],
  ];
  //print_r($resultado);
  print_r($resultados);

 ?>
<link rel="stylesheet" href="/css/inicio.css">
<h1>Inicio</h1>
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
  <!-- aquí meteré las viñetas con div despues haremos un foreach para meter todos los hashtag -->
  <p><a href="listadoHashtag.php">ejemplo publicacion</a></p>

    <?php
  /*  foreach($resultado as $fila){}*/?>
</div>
