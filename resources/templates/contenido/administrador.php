<?php

//require("$ROOT/src/Manager/PublicacionManager.php");
/*
Información sacada de la base de datos
*/
$datosHash = HashtagManager::getAll();

print_r($datosHash);


 ?>
<link rel="stylesheet" href="/css/inicio.css">
<h1>Administrar Hashtag</h1>
<div>
    <table border="2">
      <thead>
        <tr>
          <th>Id</th>
          <th>Nombre</th>
          <th>Id_Usuario</th>
          <th>Eliminar</th>
          <th>Agregar</th>
        </tr>

      </thead>
      <tbody>
        <?php foreach($datosHash as $fila){?>
        <tr>
          <td><?=$fila['ID']?></td>
          <td><?=$fila['NOMBRE']?></td>
          <td><?=$fila['ID_USUARIO']?></td>
          <td>
            <a href="Eliminar.php?id=<?= $fila['ID']?>">Eliminar</a>
          </td>
          <td>
              <a href="Agregar.php">Agregar</a>
          </td>
        </tr>
        <?php }?>
      </tbody>
    </table>
</div>