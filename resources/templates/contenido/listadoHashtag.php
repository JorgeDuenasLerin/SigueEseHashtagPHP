<?php

insercionEnBBDD();

if(isset($_GET['id'])){
  $id = $_GET['id'];
  $datos = PublicacionManager::getPublicacionByHashtagId($id);

} else if(isset($_GET['id_hashtag'])) {
  //esta obtiene publicaciones por id del hashtag
  $id = $_GET['id_hashtag'];

  $datos = PublicacionManager::getPublicacionByHashtagId($id);


}else{
  //esta obtiene todos los hastag y sus publicaciones
  //$datos = PublicacionManager::getAll();
  $datos = PublicacionManager::getAllPublicacionByHashtag();
}

?>

<link rel="stylesheet" href="/css/general.css">
<h1 class="centrar">Listado publicacion de un hashtag</h1><br><br>
<div class="tabla">
  <table border="2" >
			<thead>
				<tr>
              <th>ID</th>
              <th>Usuario </th>
              <th>Hashtag </th>
              <th>Contenido </th>
              <th>Fecha </th>
              <th>Aplicacion</th>
				</tr>
			</thead>

			<tbody>
        <?php foreach($datos as $fila) {
            $usuarioNuevo = utf8_decode($fila['USUARIO']);
            $contenidoNuevo = utf8_decode($fila['CONTENIDO']);
          ?>
					<tr>
							<td><?=$fila['ID']?></td>
              <td><?=$usuarioNuevo?></td>
              <td>
                <a href="listadoHashtag.php?id_hashtag=<?= $fila['ID_HASHTAG']?>"><?=$fila['NOMBRE']?></a>
              </td>
              <td>
                <a href="detallePublicacion.php?id=<?= $fila['ID']?>"><?=$contenidoNuevo?></a>
              </td>
              <td><?=$fila['FECHA']?></td>
              <td><?=$fila['APLICACION']?></td>
					</tr>
        <?php } ?>
			</tbody>
    </table>
    <p></p>
</div>
