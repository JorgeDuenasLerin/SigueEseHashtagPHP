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
    return $db->obtenDatos()[0];
  }

  public static function insert(...$campos){
    $db = DWESBaseDatos::obtenerInstancia();
    $db->ejecuta("INSERT INTO TOKEN 
                    (ID,ID_HASHTAG,ID_USUARIO)
                   VALUES(?,?,?)",
                   $campos);
  }

  public static function update($id, ...$campos){
    $db = DWESBaseDatos::obtenerInstancia();
    $db->ejecuta("UPDATE TOKEN 
                  SET ID = ?,
                      ID_HASHTAG = ?,
                      ID_USUARIO = ?
                   WHERE ID =?",$campos);
  }

  public static function delete($id){
    $db = DWESBaseDatos::obtenerInstancia();
    $db->ejecuta("DELETE FROM TOKEN WHERE ID=?",$id);
  }





}



?>