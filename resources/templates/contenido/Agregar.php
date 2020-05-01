<?php

$nombreHashtag = "";

if (isset($_POST) && count($_POST)!=0 ) {
  if (isset($_POST['hashtag']) && strlen($_POST['hashtag'])>=1 ) {
    $nombreHashtag = limpiarCadena($_POST['hashtag']);
    HashtagManager::insert($nombreHashtag,$_SESSION['ID']);
  }
  header('Location: administrador.php');
  die();
}


?>

<h1>Formulario para ingresar un nuevo hashtag</h1>
<form class="" action="administrador.html" method="post">
    <label> Ingrese el nuevo Hashtag</label>
  	<input type="text" name="hashtag" placeholder="Escriba aquí el nuevo hashtag" value="<?=$hashtag?>"><br>
    <input type="submit" name="agregar" value="agregar"><br>
</form>
