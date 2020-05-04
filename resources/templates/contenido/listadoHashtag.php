<?php


if(isset($_GET['id'])){
  $id = $_GET['id'];
} else {
  // Pintar erro no encontrado
  // lanzar un 404
}
print_r($id);

$datos = PublicacionManager::getByHashtagId($id);

print_r($datos);



?>

<link rel="stylesheet" href="/css/listadohashtag.css">
<h1>Listado publicacion de un hashtag</h1><br><br>
<div class="listado">
  <table border="2" >
			<thead>
				<tr>
              <th>ID</th>
              <th>Usuario </th>
              <th>Hastag </th>
              <th>Contenido </th>
              <th>Fecha </th>
              <th>Aplicacion </th>
				</tr>
			</thead>

			<tbody>
        <?php foreach($datos as $fila) { ?>
					<tr>
							<td><?=$fila['ID']?></td>
              <td><?=$fila['USUARIO']?></td>
              <td><?=$fila['HASHTAG']?></td>
              <td>
                <a href="detallePublicacion.php?id=<?= $fila['ID']?>"><?=$fila['CONTENIDO']?></a>
              </td>
              <td><?=$fila['FECHA']?></td>
              <td><?=$fila['APLICACION']?></td>
					</tr>
        <?php } ?>
			</tbody>

    </table>
    <p></p>

</div>
