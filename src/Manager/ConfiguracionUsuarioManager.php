<?php

class ConfiguracionUsuarioManager {


  // modificar el nombre de usuario
  public static function updateNombre($id,$campo){
    $db = DWESBaseDatos::obtenerInstancia();
    $db->ejecuta("UPDATE USUARIO SET NOMBRE='$campo' WHERE ID ='$id';");
  }

  // modificar la contraseña
  public static function updateContraseña($id,$campo){
    $db = DWESBaseDatos::obtenerInstancia();
    $campoHash = password_hash($campo, PASSWORD_DEFAULT);
    $db->ejecuta("UPDATE USUARIO SET CONTRASEÑA='$campoHash' WHERE ID ='$id';");
  }

  // modificar el Correo Electronico
  public static function updateCorreo($id,$campo){
    $db = DWESBaseDatos::obtenerInstancia();
    $db->ejecuta("UPDATE USUARIO SET EMAIL='$campo' WHERE ID ='$id';");
  }



}

?>
