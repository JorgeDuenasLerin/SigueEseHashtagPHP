<?php

if(isset($_GET['id'])){
  $id = $_GET['id'];
}
print_r('el id recibido es :');
print_r($id);
print_r('<br>');
$hashPub = HashpubManager::getByIdHashtag($id);
print_r('<br> haspub');
print_r($hashPub);
foreach($hashPub as $datos){
  print_r('<br>');
  print_r($datos['ID_PUBLICACION']);
  $publicaciones =  PublicacionManager::getById($datos['ID_PUBLICACION']);
  print_r('<br>');
  print_r($publicaciones);
}


$datos = PublicacionManager::getById($hashPub);
print_r('<br>');
print_r('datos publicaciones ');
print_r('<br>');
print_r($publicaciones);


?>

<link rel="stylesheet" href="/css/listadohashtag.css">
<h1>listado publicacion de un hastag</h1>
<div class="">
  <table border="2" >
			<thead>
				<tr>
              <th>ID</th>
              <th>Nombre </th>
              <th>Contenido </th>
              <th>imagen </th>
              <th>Fecha </th>
              <th>aplicacion </th>
				</tr>
			</thead>

			<tbody>
<<<<<<< HEAD
            <?php foreach($hashpub as $fila) { ?>
=======
            <?php foreach($publicaciones as $fila) { ?>
>>>>>>> 1240bccee08ddca56980115eacee682fd0916318
					<tr>
							<td><?=$fila['ID']?></td>
              <td><?=$fila['NOMBRE']?></td>
              <td><?=$fila['CONTENIDO']?></td>
              <td><?=$fila['IMAGEN']?></td>
              <td><?=$fila['FECHA']?></td>
              <td><?=$fila['APLICACION']?></td>
					</tr>
          <?php } ?>
			</tbody>

		</table>
  Contenido 2
  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

  <p><a href="detallePublicacion.php"> ejemplo detalle de unapublicacion</a> </p>
</div>
