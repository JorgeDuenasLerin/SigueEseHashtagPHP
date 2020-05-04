<?php



if(isset($_GET['id'])){

  $id = $_GET['id'];
  as_debug($_GET);
  $datos = PublicacionManager::getPublicacionByHashtagId($id);
  
} else if(isset($_GET['id_hashtag'])) {
  //esta obtiene publicaciones por id del hastag
  $id = $_GET['id_hashtag'];
  as_debug($_GET);
  $datos = PublicacionManager::getPublicacionByHashtagId($id);
  
}else{
  //esta obtiene todos los hastag y sus publcaciones
  $datos = PublicacionManager::getAllPublicacionByHashtag();
}


as_debug($datos);


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
              <td>
                <a href="listadoHashtag.php?id_hashtag=<?= $fila['ID_HASHTAG']?>"><?=$fila['NOMBRE']?></a>
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
