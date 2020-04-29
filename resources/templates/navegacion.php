<?php
session_start();
global $ROOT;

//cerrar sesion
if(isset($_GET['cerrarSsion']) && $_GET['cerrarSesion'] == true){
  $_SESSION['autentificado'] = false;
  session_destroy();

  header('location: inico.php');
  die();
}


//ubtenemos id del usuario
if(isset($_GET['ID'])){
  $id = intval($_GET['ID']);
}

//obtener id del usuario


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
    <a href="inicio.php">Inicio</a>
      <?php if(isset($_SESSION['autentificado']) && $_SESSION['autentificado'] == true ){ ?>
        <a href="perfil.php">Perfil</a>
        <a href="incio.php?cerrarSesion=true" data-id=<?$_SESSION['ID']?> id='perfil'> Cerrar sesion</a>
      <?php } elseif($uri != '/login.php'){?>
        <a href="login.php">login</a>
      <?php }?>
        <a href="paginaajax.php">AJAX</a>
    </div>
  </nav>
</header>
