<?php 
//para que si no esta autentificado te manda al login
if( $_SESSION['autentificado'] != true ){
  header('Location: login.php');
  exit;
}
$user = UsuarioManager::getById($_SESSION['ID']);


?>
<link rel="stylesheet" href="/css/perfil.css">

<div class="perfil">
  <h1>Perfil Privado</h1>
  <br><br>
  <h2>Nombre: <?=$user['USUARIO']?></h2>
  <h4>Email: <?=$user['EMAIL']?></h4>
  <br>
  <a href="configuracionUsuario.php?id=<?=$user['ID']?>">Editar Perfil</a>

  </div>

