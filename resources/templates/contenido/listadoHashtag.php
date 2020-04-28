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


<h1>listado publicacion de un hastag</h1>
<div class="">
  <table border="2" >
			<thead>
				<tr>
              <th>ID</th>
              <th>Usuario </th>
              <th>Hastag </th>
              <th>contenido </th>
              <th>Fecha </th>
              <th>aplicacion </th>
				</tr>
			</thead>

			<tbody>
        <?php foreach($datos as $fila) { ?>
					<tr>
							<td><?=$fila['ID']?></td>
              <td>
                <a href="detallePublicacion.php?id=<?= $fila['ID']?>"><?=$fila['USUARIO']?></a>
              </td>
              <td>
                <a href="detallePublicacion.php?id=<?= $fila['ID']?>"><?=$fila['HASHTAG']?></a>
              </td>
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
