<?php
	require("$ROOT/src/validar_formulario.php");
?>

<?php

	$_SESSION['id']= 1;
	$nombre="";
	$email="";
	$contraseña="";
	$nombreComprueba="";
	$emailComprueba="";
	$contraseñaComprueba="";
	$errores = [];


	if ( isset($_POST) && count($_POST)!=0 ) {

		if (isset($_POST['nombre']) && strlen($_POST['nombre'])>=1 ) {
			$nombre = limpiarCadena($_POST['nombre']);
			if (isset($_POST['nombreComprueba']) && strlen($_POST['nombreComprueba'])>=1 ) {
				$nombreComprueba = limpiarCadena($_POST['nombreComprueba']);
			}
			if(!($_POST['nombre'] === $_POST['nombreComprueba'])){
				$errores['nombre'] = 'Deben coincidir los nombres.';
			}
		}
		if (isset($_POST['email']) && filter_var($_POST['email'],FILTER_VALIDATE_EMAIL )) {
			$email = limpiarCadena($_POST['email']);
			if (isset($_POST['emailComprueba']) && filter_var($_POST['emailComprueba'],FILTER_VALIDATE_EMAIL )) {
				$emailComprueba = limpiarCadena($_POST['emailComprueba']);
			}
			if(!($_POST['email'] === $_POST['emailComprueba'])){
				$errores['email'] = ' Deben coincidir los emails.';
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
			if($_SESSION['id'] ==  1{
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

	<form action="configuracionUsuario.php" method="POST">
		<div class="configuracion">
			<div>
				<label>Cambiar Nombre del Usuario:</label><br>
				<input type="text" name="nombre" placeholder="Escriba el nombre nuevo" value="<?=$nombre?>"><br>
				<input type="text" name="nombreComprueba" placeholder="Repita el nombre" value="<?=$nombreComprueba?>"><br>
				<span class="<?= isset($errores['nombre'])?'error':'InvalidArgumentExceptionoError' ?>"><?=$errores['nombre']?></span><br>
			</div>

			<div>
				<label>Cambiar Email del Usuario:</label><br>
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
