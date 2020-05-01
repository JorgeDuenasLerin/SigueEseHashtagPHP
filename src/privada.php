<?php


if (isset($_SESSION['autentificado']) && $_SESSION['autentificado']== 0) {
		header('Location: inicio.php');
		die();
	}

?>
