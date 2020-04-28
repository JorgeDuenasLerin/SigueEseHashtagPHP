<?php

//require("$ROOT/src/Manager/PublicacionManager.php");
/*

Información sacada de la base de datos

*/
$datos = PublicacionManager::getAll();


$id = $datos['ID'];
$datoHastag = PublicacionManager::getByHashtagId($id);

print_r($datos);

 ?>
<link rel="stylesheet" href="/css/inicio.css">
<h1>Inicio</h1>
<div class="inicio">
  <h1>Listado de los Hashtag</h1>
  <table border="2" >
			<thead>
				<tr>
              <th>ID</th>
              <th>Nombre de Usuario</th>
              <th># Hashtag</th>
              <th>Contenido</th>
              <th>Imagen</th>
              <th>Fecha</th>
              <th>Aplicación</th>
				</tr>
			</thead>

			<tbody>
            <?php foreach($datos as $fila) { ?>
					<tr>
							<td><?=$fila['ID']?></td>
              <td><?=$fila['USUARIO']?></td>
              <td>
                <a href="listadoHashtag.php?id=<?= $datoHastag['ID_HASGTAG']?>"><?=$fila['HASHTAG']?></a>
              </td>
              <td><?=$fila['CONTENIDO']?></td>
              <td><?=$fila['IMAGEN']?></td>
              <td><?=$fila['FECHA']?></td>
              <td><?=$fila['APLICACION']?></td>

					</tr>
          <?php } ?>
			</tbody>

		</table>
  <!-- aquí meteré las viñetas con div despues haremos un foreach para meter todos los hashtag -->


</div>
