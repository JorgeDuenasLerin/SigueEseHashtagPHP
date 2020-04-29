<?php

class ConfiguracionUsuarioManager {


  // modificar el nombre de usuario
  public static function updateNombre($id,...$campo){
    $parametros = $campo;
    array_push($parametros,$id);
    $db = DWESBaseDatos::obtenerInstancia();
    $db->ejecuta("UPDATE USUARIO SET USUARIO = ? WHERE ID = ? " , $parametros);
  }

  // modificar la contraseña
  public static function updateContraseña($id,...$campo){
    $campoHash = password_hash($campo, PASSWORD_DEFAULT);
    $db = DWESBaseDatos::obtenerInstancia();
    $parametros = $campoHash;
    array_push($parametros,$id);
    $db->ejecuta("UPDATE USUARIO SET CONTRASEÑA = ? WHERE ID = ? ", $parametros);
  }

  // modificar el Email
  public static function updateEmail($id,...$campo){
    $parametros = $campo;
    array_push($parametros,$id);
    $db = DWESBaseDatos::obtenerInstancia();
    $db->ejecuta("UPDATE USUARIO SET EMAIL = ? WHERE ID = ? " ,$parametros);
  }



}

?>
