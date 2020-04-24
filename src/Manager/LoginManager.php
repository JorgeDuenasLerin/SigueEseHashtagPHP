<?php


  class LoginManager{

    		public static function obtenerUsuarioYHashUsuario($usuario){
    			$db = DWESBaseDatos::obtenerInstancia();

    			$db->ejecuta("SELECT ID,NOMBRE,CONTRASEÑA FROM USUARIO"
    															." WHERE NOMBRE = '$usuario'");
                                  
    			return $db->obtenDatos();
    		}
  }
?>
