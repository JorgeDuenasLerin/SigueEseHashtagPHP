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
                    (USUARIO,CONTENIDO,IMAGEN,APLICACION,ID_TWITTER)
                   VALUES(?,?,?,?,?)",
                   $campos);
  }

  public static function update($id, ...$campos){
    $parametros = $campos;
    array_push($parametros,$id);
    $db = DWESBaseDatos::obtenerInstancia();
    $db->ejecuta("UPDATE PUBLICACION
                  SET USUARIO = ?,
                      CONTENIDO = ?,
                      IMAGEN = ?,
                      APLICACION = ?,
                      ID_TWITTER = ?
                   WHERE ID =?",$parametros);
  }

  public static function delete($id){
    $db = DWESBaseDatos::obtenerInstancia();
    $db->ejecuta("DELETE FROM PUBLICACION WHERE ID=?",$id);
  }
//esta obtiene publicaciones por id del hastag
  public static function getByHashtagId($id){
    $db = DWESBaseDatos::obtenerInstancia();
    $db->ejecuta("SELECT *
                  FROM HASHPUB
                  LEFT JOIN PUBLICACION
                  ON HASHPUB.ID_PUBLICACION = PUBLICACION.ID
                  WHERE HASHPUB.ID_HASHTAG = ?",$id);
    return $db->obtenDatos();

  }
  //esta obtiene todos los hastag y sus publcaciones
  public static function getAllPublicacionByHashtag(){
    $db = DWESBaseDatos::obtenerInstancia();
    $db->ejecuta("SELECT *
                  FROM HASHPUB
                  LEFT JOIN PUBLICACION
                  ON HASHPUB.ID_PUBLICACION = PUBLICACION.ID
                  LEFT JOIN HASHTAG
                  ON HASHPUB.ID_HASHTAG = HASHTAG.ID");
    return $db->obtenDatos();

  }
  public static function getPublicacionByHashtagId($id){
    $db = DWESBaseDatos::obtenerInstancia();
    $db->ejecuta("SELECT *
                  FROM HASHPUB
                  LEFT JOIN PUBLICACION
                  ON HASHPUB.ID_PUBLICACION = PUBLICACION.ID
                  LEFT JOIN HASHTAG
                  ON HASHPUB.ID_HASHTAG = HASHTAG.ID
                  WHERE HASHTAG.ID = ?",$id);
    return $db->obtenDatos();

  }
  public static function getPublicacionIdByHashtag($id){
    $db = DWESBaseDatos::obtenerInstancia();
    $db->ejecuta("SELECT *
                  FROM HASHPUB
                  LEFT JOIN PUBLICACION
                  ON HASHPUB.ID_PUBLICACION = PUBLICACION.ID
                  LEFT JOIN HASHTAG
                  ON HASHPUB.ID_HASHTAG = HASHTAG.ID
                  WHERE PUBLICACION.ID = ?",$id);
    return $db->obtenDatos();

  }
  public static function getByHashtag(){
    $db = DWESBaseDatos::obtenerInstancia();
    $db->ejecuta("SELECT *
                  FROM HASHPUB
                  LEFT JOIN PUBLICACION
                  ON HASHPUB.ID_PUBLICACION = PUBLICACION.ID
                  ");
    return $db->obtenDatos();

  }

  // ...
  /*

  SQL para la función: getByHastagId

  SELECT pu.*
  FROM HASHPUB hp
    LEFT JOIN PUBLICACION pu ON hp.ID_PUBLICACION = pu.ID
  WHERE hp.ID_HASHTAG = 2


  SELECT *
FROM HASHPUB
LEFT JOIN PUBLICACION
ON HASHPUB.ID_PUBLICACION = PUBLICACION.ID
LEFT JOIN HASHTAG
ON HASHPUB.ID_HASHTAG = HASHTAG.ID
  */

}

?>
