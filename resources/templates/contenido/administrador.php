<?php

areaPrivada();
$datosHash = HashtagManager::getAll();

?>

<link rel="stylesheet" href="/css/general.css">
<h1 class="centrar">Administrar Hashtag</h1>
<div class="tabla2">
    <table border="2">
      <thead>
        <tr>
          <th>Id</th>
          <th>Nombre</th>
          <th>Id_Usuario</th>
          <th>Eliminar</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($datosHash as $fila){?>
        <tr>
          <td><?=$fila['ID']?></td>
          <td><?=$fila['NOMBRE']?></td>
          <td><?=$fila['ID_USUARIO']?></td>
          <td>
            <a href="eliminar.php?id=<?= $fila['ID']?>">Eliminar</a>
          </td>
        </tr>
        <?php }?>
      </tbody>
    </table>
    <br><br>
    <a href="agregar.php">Agregar Hashtag</a>
</div>
