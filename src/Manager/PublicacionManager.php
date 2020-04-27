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
    return $db->obtenDatos();
  }

  public static function insert(...$campos){
    $db = DWESBaseDatos::obtenerInstancia();
    $db->ejecuta("INSERT INTO PUBLICACION
                    (NOMBRE,HASHTAG,CONTENIDO,IMAGEN,APLICACION)
                   VALUES(?,?,?,?)",
                   $campos);
  }

  public static function update($id, ...$campos){
    $parametros = $campos;
    array_push($parametros,$id);
    $db = DWESBaseDatos::obtenerInstancia();
    $db->ejecuta("UPDATE PUBLICACION
                  SET NOMBRE = ?,
                      HASHTAG = ?,
                      CONTENIDO = ?,
                      IMAGEN = ?,
                      APLICACION = ?
                   WHERE ID =?",$parametros);
  }

  public static function delete($id){
    $db = DWESBaseDatos::obtenerInstancia();
    $db->ejecuta("DELETE FROM PUBLICACION WHERE ID=?",$id);
  }

public static function getByHastagId($id){
  $db = DWESBaseDatos::obtenerInstancia();
  $db->ejecuta("SELECT *
                FROM HASHPUB 
                LEFT JOIN PUBLICACION 
                ON HASHPUB.ID_PUBLICACION = PUBLICACION.ID
                WHERE HASHPUB.ID_HASHTAG = ?",$id);
  return $db->obtenDatos();

}

  // ...
  /*

  SQL para la función: getByHastagId

  SELECT pu.*
  FROM HASHPUB hp
    LEFT JOIN PUBLICACION pu ON hp.ID_PUBLICACION = pu.ID
  WHERE hp.ID_HASHTAG = 2
  */

}

?>
