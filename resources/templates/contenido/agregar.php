<?php

areaPrivada();
$nombreHashtag = "";
$hashtag = "#";
if (isset($_POST) && count($_POST)!=0 ) {
  if (isset($_POST['hashtag']) && strlen($_POST['hashtag'])>=1 ) {
    $nombreHashtag = clear_input($_POST['hashtag']);
    $nombreCompleto = $nombreHashtag;  //$nombreCompleto = $hashtag . $nombreHashtag;
    HashtagManager::insert($nombreCompleto,$_SESSION['ID']);
  }
  header('Location: administrador.php');
  die();
}
?>
<link rel="stylesheet" href="/css/general.css">

<h1 class="centrar">Formulario para ingresar un nuevo hashtag</h1>
<form class="centrar" action="agregar.php" method="post">
    <label> Ingrese el nuevo Hashtag</label><br>
  	<input type="text" name="hashtag" placeholder="Escriba aquí el nuevo hashtag" value="<?=$nombreHashtag?>"><br>
    <input type="submit" name="agregar" value="agregar"><br>
</form>
