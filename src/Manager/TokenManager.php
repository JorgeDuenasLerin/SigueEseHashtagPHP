<?php

class TokenManager implements IDWESEntidadManager{

  public static function getAll(){
    $db = DWESBaseDatos::obtenerInstancia();
    $db->ejecuta('SELECT * FROM TOKEN');
    return $db->obtenDatos();
  }

  public static function getById($id){
    $db = DWESBaseDatos::obtenerInstancia();
    $db->ejecuta("SELECT * FROM TOKEN WHERE ID = ?",$id);
    return $db->obtenDatos();
  }
/*EMAIL,TOKEN,ID_USUARIO*/
  public static function insert(...$campos){
    $db = DWESBaseDatos::obtenerInstancia();
    $db->ejecuta("INSERT INTO TOKEN
                    (EMAIL,TOKEN,ID_USUARIO)
                   VALUES(?,?,?)",
                   $campos);
  }

  public static function update($id, ...$campos){
    $parametros = $campos;
    array_push($parametros,$id);
    $db = DWESBaseDatos::obtenerInstancia();
    $db->ejecuta("UPDATE TOKEN
                  SET EMAIL = ?,
                      TOKEN = ?,
                      ID_USUARIO = ?
                   WHERE ID = ? ",$parametros);
  }

  public static function delete($id){
    $db = DWESBaseDatos::obtenerInstancia();
    $db->ejecuta("DELETE FROM TOKEN WHERE ID=?",$id);
  }





}



?>
