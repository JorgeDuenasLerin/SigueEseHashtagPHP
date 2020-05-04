<?php

print_r($_SESSION);
$uri = $_SERVER['REQUEST_URI'];
//ubtenemos id del usuario
if(isset($_GET['ID'])){
  $id = intval($_GET['ID']);

}


//token

?>
<link rel="stylesheet" href="css/header.css">
<header>
  <a href="inicio.php">
  <img src="imagenes/hashtag.png" alt="logo de la empresa"></a>

  <div>
    <h3>Encuentra tu hashtag</h3>
  </div>
  <nav>
    <div class="menu">
    <a href="listadoHashtag.php">Inicio</a>
      <?php if(isset($_SESSION['autentificado']) && $_SESSION['autentificado'] == true ){ ?>
        <a href="perfil.php">Perfil</a>
        <a href="listadoHashtag.php?cerrarSesion=true"  id='perfil'> Cerrar sesion</a>
        <a href="administrador.php">Administrador</a>
      <?php } elseif($uri != '/login.php'){?>
        <a href="login.php">login</a>
      <?php }?>
        <a href="paginaajax.php">AJAX</a>
    </div>
  </nav>
</header>
