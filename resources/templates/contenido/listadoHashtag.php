<?php

$datos = HashtagManager::getAll();
print_r($datos);


?>

<link rel="stylesheet" href="/css/listadohashtag.css">
<h1>listado publicacion de un hastag</h1>
<div class="">
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
  Contenido 2
  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

  <p><a href="detallePublicacion.php"> ejemplo detalle de unapublicacion</a> </p>
</div>
