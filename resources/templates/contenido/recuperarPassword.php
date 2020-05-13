<?php
  $errores = [];
  $nuevaPassword;

  $tokenOculto = "";
  $emailOculto = "";

  if ( count($_POST) > 0){
    $tokenCorrecto =  true;
    $email = $_POST['email'];
    $token = $_POST['token'];

    if(isset($_POST['emailOculto']) && $_POST['emailOculto'] != null){
      $emailOculto = $_POST['emailOculto'];
    }
    if(isset($_POST['tokenOculto']) && $_POST['tokenOculto'] != null){
      $tokenOculto = $_POST['tokenOculto'];
    }

    if (  isset($_POST['password']) &&
          $_POST['password'] != null &&
          isset($_POST['password2']) &&
          $_POST['password2'] != null &&
          $_POST['password'] == $_POST['password2'] &&
          $emailOculto == $email &&
          $tokenOculto == $token
        ){

      $nuevaPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);

      if (count($errores) == 0) {

        ConfiguracionUsuarioManager::updateContraseñaPassword($email,$nuevaPassword);
        //destruir token

        $tokenOculto = "";
        $emailOculto = "";
        header("Location: login.php");
        die();
      }

    }else{
      $errores = 'Error en la contraseña, pruebe de nuevo';
    }
  }else if ( count($_GET) > 0){
    if (  isset($_GET['email']) && $_GET['email'] != null &&
          isset($_GET['token']) && $_GET['token'] != null
        ) {

      $email = $_GET['email'];
      $token = $_GET['token'];

      $tokenBD = TokenManager::getByEmail($email);
      /*print_r($tokenBD);
      print_r("posicion token");
      print_r($tokenBD[0]['TOKEN']);*/

     if( $tokenBD[0]['TOKEN'] != null && $tokenBD[0]['TOKEN'] == $token){
        $tokenCorrecto =  true;
      }else{
        $tokenCorrecto =  false;
      }
    }else{
      header("Location: login.php");
      die();
    }
  }else{
    header("Location: login.php");
    die();
  }

?>
<link rel="stylesheet" href="/css/general.css">
<div class="centrar">
  <?php if ($tokenCorrecto){ ?>
      <h2>Recupera tu contraseña</h2>
      <form action="recuperarPassword.php" method="post">
        <label for="password">Contraseña Nueva</label>
        <input type="password" name="password">
        <br>
        <label for="password2">Repita la contraseña</label>
        <input type="password" name="password2">
        <input type="text" name="email" value="<?=$email?>" hidden>
        <input type="text" name="token" value="<?=$token?>" hidden>

        <br>

        <input type="hidden" name="emailOculto" value="<?=$email?>">
        <input type="hidden" name="tokenOculto" value="<?=$token?>">


        <?php if( isset($errores) && $errores != null) { ?>
          <span class="error"><?=$errores?></span>
          <br>
        <?php } ?>
        <input type="submit" name="Enviar" value="Enviar">
      </form>
  <?php } ?>
  <?php if (!$tokenCorrecto){ ?>
      <p>No se ha podido restablecer la contraseña, pruebe de nuevo</p>
      <br>
      <a href="login.php">Login</a>
  <?php } ?>
</div>
