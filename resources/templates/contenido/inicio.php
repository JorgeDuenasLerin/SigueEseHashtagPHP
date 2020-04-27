<?php

//require("$ROOT/src/Manager/PublicacionManager.php");
/*

Información sacada de la base de datos

*/
$datos = HashtagManager::getAll();

print_r($datos);

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
              <td>
              <a href="listadoHashtag.php?id=<?= $fila['ID']?>"><?=$fila['NOMBRE']?></a>
              </td>
					</tr>
          <?php } ?>
			</tbody>

		</table>
  <!-- aquí meteré las viñetas con div despues haremos un foreach para meter todos los hashtag -->

    
</div>
