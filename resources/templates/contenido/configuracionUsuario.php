<?php
	require("$ROOT/src/validar_formulario.php");
?>

<?php

	/*
	-> filter_var — Filtra una variable con el filtro que se indique
			filter_var ( mixed $variable [, int $filter = FILTER_DEFAULT [, mixed $options ]] ) : mixed

	-> password_hash — Crea un hash de contraseña
			password_hash ( string $password , integer $algo [, array $options ] ) : string

	-> password_verify — Comprueba que la contraseña coincida con un hash
			password_verify ( string $password , string $hash ) : bool
	*/
	$datos = UsuarioManager::getById(1);
	$_SESSION['id']= 1;
	$usuario="";
	$email="";
	$contraseña="";
	$usuarioComprueba="";
	$emailComprueba="";
	$contraseñaComprueba="";
	$errores = [];

	if ( isset($_POST) && count($_POST)!=0 ) {

		if (isset($_POST['usuario']) && strlen($_POST['usuario'])>=1 ) {
			$usuario = limpiarCadena($_POST['nombre']);
			if (isset($_POST['usuarioComprueba']) && strlen($_POST['usuarioComprueba'])>=1 ) {
				$usuarioComprueba = limpiarCadena($_POST['usuarioComprueba']);
			}
			if(!($_POST['usuario'] === $_POST['usuarioComprueba'])){
				$errores['usuario'] = 'Deben coincidir los usuarios.';
			}
		}
		if (isset($_POST['email']) && filter_var($_POST['email'],FILTER_VALIDATE_EMAIL )) {
			$email = limpiarCadena($_POST['email']);
			if (isset($_POST['emailComprueba']) && filter_var($_POST['emailComprueba'],FILTER_VALIDATE_EMAIL )) {
				$emailComprueba = limpiarCadena($_POST['emailComprueba']);
			}
			if(!($_POST['email'] === $_POST['emailComprueba'])){
				$errores['email'] = 'Deben coincidir los emails.';
			}
		}
		if (isset($_POST['contraseña']) && contraseñaValida($_POST['contraseña'],4) ) {
			$contraseña = limpiarCadena($_POST['contraseña']);
			if (isset($_POST['contraseñaComprueba']) && contraseñaValida($_POST['contraseñaComprueba'],4) ) {
				$contraseñaComprueba = limpiarCadena($_POST['contraseñaComprueba']);
			}if(!($_POST['contraseña'] === $_POST['contraseñaComprueba'])){
				$errores['contraseña'] = ' Deben coincidir las contraseñas.';
			}
		}

		if (count($errores)==0 && count($_POST)>0) {
			if($_SESSION['id'] ==  1){
					if($_POST['nombre']){
						ConfiguracionUsuarioManager::updateNombre($_SESSION['id'],$nombre);
				}
				if($_POST['correo']){
						ConfiguracionUsuarioManager::updateCorreo($_SESSION['id'],$correo);
				}
				if($_POST['contraseña']){
						ConfiguracionUsuarioManager::updateContraseña($_SESSION['id'],$contraseña);
				}
			}
			header('Location: inicio.php');
			die();

 		}
}

?>


<main>

	<link rel="stylesheet" href="/css/configuracion.css">
	<form action="configuracionUsuario.php" method="POST">
		<div class="configuracion">
			<div>
				<label>Cambiar Nombre del Usuario:</label><br>
				<label> Nombre actual:<?=$datos['USUARIO']?></label><br>
				<input type="text" name="usuario" placeholder="Escriba el usuario nuevo" value="<?=$usuario?>"><br>
				<input type="text" name="usuarioComprueba" placeholder="Repita el usuario" value="<?=$usuarioComprueba?>"><br>
				<span class="<?= isset($errores['usuario'])?'error':'noError' ?>"><?=$errores['usuario']?></span><br>
			</div>

			<div>
				<label>Cambiar Email del Usuario:</label><br>
				<label>Correo actual:<?=$datos['EMAIL']?></label><br>
				<input type="text" name="email" placeholder="Escriba el email nuevo" value="<?=$email?>"><br>
				<input type="text" name="emailComprueba" placeholder="Repita el email" value="<?=$emailComprueba?>"><br>
				<span class="<?= isset($errores['email'])?'error':'noError' ?>"><?=$errores['email']?></span><br>
			</div>

			<div>
				<label>Cambiar contraseña</label><br>
				<input type="text" name="contraseña" placeholder="Escriba su contraseña" value="<?=$contraseña?>"><br>
				<input type="text" name="contraseñaComprueba" placeholder="Repita la contraseña" value="<?=$contraseñaComprueba?>"><br>
				<span class="<?= isset($errores['contraseña'])?'error':'noError' ?>"><?=$errores['contraseña']?></span><br>
			</div>

			<input type="submit" name="cambiar" value="cambiar"><br>

		</div>

	</form>

</main>
