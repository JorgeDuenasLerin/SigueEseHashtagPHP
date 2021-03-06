<?php

session_start();
global $ROOT;

//cerrar sesion
if(isset($_GET['cerrarSesion']) && $_GET['cerrarSesion'] == true){
  $_SESSION['autentificado'] = false;
  session_destroy();
  setcookie("recuerdame", "", time() - 3600);     //destruir la cookie

  header('location: listadoHashtag.php');
  die();
}

//si tenemos cookie recuerdame
if(isset($_COOKIE['recuerdame'])){
  $token= $_COOKIE['recuerdame'];

  $id_user = CookieManager::getById($token)['ID_USUARIO'];     //comprobamos que el token existe en la base de datos

  //token correcto
  if($id_user != null){
    setcookie('recuerdame', $_COOKIE['recuerdame'], time()+(24*60*60*7));   //establecemos la cookie otra semana mas

    $_SESSION['autentificado'] = true;      //autentificamos la sesion
    $_SESSION['ID'] = $id_user;
  }

}
?>
