<?php
session_start();
global $ROOT;

//cerrar sesion
if(isset($_GET['cerrarSesion']) && $_GET['cerrarSesion'] == true){
  $_SESSION['autentificado'] = false;
  session_destroy();

  header('location: inicio.php');
  die();
}
print_r($_SESSION);
$uri = $_SERVER['REQUEST_URI'];
//ubtenemos id del usuario
if(isset($_GET['ID'])){
  $id = intval($_GET['ID']);
}

//si tenemos cookie recuerdame 
if(isset($_COOKIE['recuerdame'])){
  $token= $_COOKIE['recuerdame'];

  $id_user = CookieManager::getById($token)[0]['ID_USUARIO'];     //comprobamos que el token existe en la base de datos

  //token correcto
  if( $id_user != null){
    setcookie('recuerdame', $_COOKIE['recuerdame'], time()+(24*60*60*7));   //establecemos la cookie otra semana mas

    $_SESSION['autentificado'] = true;      //autentificamos la sesion
    $_SESSION['ID'] = $id_user;
  }

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
    <a href="inicio.php">Inicio</a>
      <?php if(isset($_SESSION['autentificado']) && $_SESSION['autentificado'] == true ){ ?>
        <a href="perfil.php">Perfil</a>
        <a href="incio.php?cerrarSesion=true"  id='perfil'> Cerrar sesion</a>
      <?php } elseif($uri != '/login.php'){?>
        <a href="login.php">login</a>
      <?php }?>
        <a href="paginaajax.php">AJAX</a>
    </div>
  </nav>
</header>
