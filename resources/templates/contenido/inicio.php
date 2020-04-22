<?php

//require("$ROOT/src/Manager/PublicacionManager.php");
/*

Información sacada de la base de datos

*/
$datos = HashtagManager::getAll();
//$resultadoUser = UsuarioManager::getAll();

/*$resultados = [
    ['algo11', 'valor12', 'cosa13'],
    ['algo21', 'valor22', 'cosa23'],
  ];*/
  //print_r($resultado);
  print_r($resultadoUser);

 ?>
<link rel="stylesheet" href="/css/inicio.css">
<h1>Inicio</h1>
<div class="inicio">
  Contenido 1
  <table border="2" >
			<thead>
				<tr>
              <th>ID</th>
              <th>Nombre Hashtag</th>
				</tr>
			</thead>

			<tbody>
            <?php foreach($datos as $fila) { ?>
					<tr>
							<td><?=$fila['ID']?></td>
              <td><?=$fila['NOMBRE']?></td>
					</tr>
          <?php } ?>
			</tbody>

		</table>
  <!-- aquí meteré las viñetas con div despues haremos un foreach para meter todos los hashtag -->
  <p><a href="listadoHashtag.php">ejemplo publicacion</a></p>

    <?php
    /*foreach($resultado as $fila){*/?>
          <div class="viñetas">
    <h1></h1>
    <img src="" alt="#coronavirus">
    <p>contenido referente al hashtag</p>
    <p>nombre del usuario</p> <p>fecha de la publicacion</p> <p>nombre de la aplicacion</p>
    </div>-->
</div>
