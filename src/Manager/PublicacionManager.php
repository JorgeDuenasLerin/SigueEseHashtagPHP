<?php

class PublicacionManager implements IDWESEntidadManager{

  public static function getAll(){
    $db = DWESBaseDatos::obtenerInstancia();
    $db->ejecuta("SELECT * FROM PUBLICACION");
    return $db->obtenDatos();
  }

  public static function getById($id){
    $db = DWESBaseDatos::obtenerInstancia();
    $db->ejecuta("SELECT * FROM PUBLICACION WHERE ID = ?",$id);
    return $db->obtenDatos()[0];
  }

  public static function insert(...$campos){
    $db = DWESBaseDatos::obtenerInstancia();
    $db->ejecuta("INSERT INTO PUBLICACION
                    (ID,NOMBRE,CONTENIDO,IMAGEN,FECHA,APLICACION)
                   VALUES(?,?,?,?,?,?)",
                   $campos);
  }

  PublicacionManager::update(17, ["Blabla", "Blabla","Blabla", "Blabla","Blabla"])

  public static function update($id, ...$campos){
    $parametros = $campos;
    $parametros []= $id;
    $db = DWESBaseDatos::obtenerInstancia();
    $db->ejecuta("UPDATE PUBLICACION
                  SET NOMBRE = ?,
                      CONTENIDO = ?,
                      IMAGEN = ?,
                      FECHA = ?,
                      APLICACION = ?
                   WHERE ID =?",);
  }

  public static function delete($id){
    $db = DWESBaseDatos::obtenerInstancia();
    $db->ejecuta("DELETE FROM PUBLICACION WHERE ID=?",$id);
  }





}



?>
