<?php


/*

Información sacada de la base de datos

*/

$resultados = [
    ['algo11', 'valor12', 'cosa13'],
    ['algo21', 'valor22', 'cosa23'],
  ];

 ?>
<link rel="stylesheet" href="/css/inicio.css">
<h1>Pag1</h1>
<div class="inicio">
  Contenido 1
  <p>
    <pre>
    <?php
    foreach($resultados as $fila) {
      print_r($fila);
    }
    ?>
    </pre>
  </p>
</div>
