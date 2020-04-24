<?php
  require("$ROOT/src/validar_formulario.php");
?>
<?php

if (isset($_SESSION['login']) && $_SESSION['login']== 1) {
  header('Location: inicio.php');
  die();
}

$usuario="";
$Contra="";
$errores=[];

if ( isset($_POST) && count($_POST)!=0 ) {
  if (isset($_POST['usuario']) && strlen($_POST['usuario'])>=3 ) {
    $usuario = limpiarCadena($_POST['usuario']);
  }else{
    $errores['error'] = true;
  }

  if (isset($_POST['Contra']) && contraseñaValida($_POST['Contra'],4) ) {
    $Contra = limpiarCadena($_POST['Contra']);
  }else{
    $errores['error'] = true;
  }
}

if (count($errores)==0 && count($_POST)>0) {

  if(empty($dato)) {
    $dato=loginManager::obtenerUsuarioYHashCliente($usuario);
    if($dato){
      $dato['usuario']='cliente';
    }

  }

  if(empty($dato)) {
    $dato = loginManager::obtenerUsuarioYHashTransportista($usuario);
    if($dato){
    $dato['usuario']='transportista';
    }
  }

  if(empty($dato)){
    $dato = loginManager::obtenerUsuarioYHashAdministrador($usuario);
    if($dato){
    $dato['usuario']='administrador';
    }
  }

  print_r($dato);
  if (password_verify($Contra, $dato['CONTRASEÑA']) ) {
    $_SESSION['login'] = 1;
    $_SESSION['usuario'] = $dato['usuario'];
    $_SESSION['id']=$dato['ID'];

    //si existe una pagina anterior que quisieran visitar
    if (isset($_SESSION['redirect']) && $_SESSION['redirect']!='') {
      header('Location: '.$_SESSION['redirect']);
      $_SESSION['redirect'] = '';
    }else{
      header('Location: exito.php');
      /*if($_SESSION['login']='administrador'){
        header('Location: administrador.php');
      }*/
    }


    die();
  }else{
    $errores['error'] = true;
  }
}


?>
<link rel="stylesheet" href="/css/login.css">
 <div class="login">
   <form action="login.php" method="POST" class="login">
   		<label>Nombre del usuario</label><br>
   		<input type="text" name="usuario" placeholder="Escriba su usuario" value="<?=$usuario?>" class="login1"><br>
   		<label>Contraseña</label><br>
   		<input type="password" name="Contra" placeholder="Escriba su contraseña" value="<?=$Contra?>" class="login1"><br>
   		<input type="submit" name="enviar" id="login2" value="Enviar"><br>
   		<span class="<?= isset($errores['error'])?'error':'noError' ?>">Alguno de los datos es erróneo</span><br>
   	</form>
 </div>
