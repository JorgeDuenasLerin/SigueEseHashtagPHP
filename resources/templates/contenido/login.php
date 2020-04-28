<?php
$errores = [];
$info = ['USUARIO' => '','CONTRASEÑA' => '',];

if( count($_POST) > 0 ){
  //crear clase gestiona errores
  gestionaErrores($_POST, $info, $errores);

    if($errores == null ){
      $datos = UsuarioManager::autentificado($info['USUARIO'])[0];
      print_r($datos);
      $id = $datos['ID'];
      

      if( $datos != null && password_verify($info['CONTRASEÑA'], $datos['CONTRASEÑA']) ){
        $_SESSION['autentificado'] = true;
        $_SESSION['ID'] = $id;

        //RECUERDAME
        if( $_POST['recuerdame'] == true ){
          $token = getToken();                                    //generamos un token y lo convertimos a hash
          //ViajesManager::insertCookieSesion([$token, $id]);       //insertamos el token en la base de datos
         CookieManager::insert($token, $id);
          setcookie('recuerdame', $token, time()+(24*60*60*7));  //se establece la cookie de recuerdame
        }

        header("Location: inicio.php");
        die();
      }else{
        $errores['db'] = 'El usuario o la contraseña no estan registrados';
      }
    }
  }


?>
<link rel="stylesheet" href="/css/login.css">
 <div class="login">
   <form class="" action="login.php" method="post">
<<<<<<< HEAD
     <input type="text" name="usuario" value="<?=$info['USUARIO']?>" placeholder="Introduce tu nombre">
=======
     <input type="text" name="USUARIO" value="<?=$info['USUARIO']?>" placeholder="Introduce tu nombre">
>>>>>>> 594565935f2dd8dc39785e7228c4d4b9d7b3a9a2
     <?php if( isset($errores['USUARIO'])) { ?>
       <br><span class='error'><?=$errores['USUARIO']?></span><br>
     <?php } ?>
     <br>
<<<<<<< HEAD
     <input type="password" name="contraseña" value="" placeholder="Introduce tu contraseña">
=======
     <input type="password" name="CONTRASEÑA" value="" placeholder="Introduce tu contraseña">
>>>>>>> 594565935f2dd8dc39785e7228c4d4b9d7b3a9a2
     <?php if( isset($errores['CONTRASEÑA'])) { ?>
       <br><span class='error'><?=$errores['CONTRASEÑA']?></span><br>
     <?php } ?>
     <br>
     <label for="recuerdame">Recuerdame</label> <input type="checkbox" name="recuerdame" value="true" id="recuerdame">
     <br>
     <a href="password.php" id="olvidadoContraseña">¿Has olvidado tu contraseña?</a>
     <br>
     <input type="submit" name="enviar" value="Enviar" >

      <?php if( isset($errores['db'])) { ?>
        <br><br><span class='error'><?=$errores['db']?></span><br>
      <?php } ?>
   </form>
 </div>
