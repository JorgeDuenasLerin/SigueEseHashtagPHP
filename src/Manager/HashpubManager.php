<?php


  class HashpubManager implements IDWESEntidadManager{

    public static function getAll(){
      $db = DWESBaseDatos::obtenerInstancia();
      $db->ejecuta("SELECT * FROM  HASHPUB");
      return $db->obtenDatos();
    }
    public static function getById($id){
      $db = DWESBaseDatos::obtenerInstancia();
      $db->ejecuta("SELECT * FROM HASHPUB WHERE ID = ?",$id);
      return $db->obtenDatos();
    }
    public static function getByIdHashtag($id){
      $db = DWESBaseDatos::obtenerInstancia();
      $db->ejecuta("SELECT ID_PUBLICACION FROM HASHPUB WHERE ID_HASHTAG = ?",$id);
      return $db->obtenDatos();
    }
    public static function getByIdPublicacion($id){
      $db = DWESBaseDatos::obtenerInstancia();
      $db->ejecuta("SELECT * FROM HASHPUB WHERE ID_PUBLICACION = ?",$id);
      return $db->obtenDatos();
    }
    public static function insert(...$campos){
      $db = DWESBaseDatos::obtenerInstancia();
      $db->ejecuta("INSERT INTO HASHPUB (ID_HASHTAG, ID_PUBLICACION)
                    VALUES (?, ?)",
                    $campos);
    }
    public static function update($id, ...$campos){
      $parametros = $campos;
      array_push($parametros,$id);
      $db = DWESBaseDatos::obtenerInstancia();
      $db->ejecuta("UPDATE HASHPUB
                    SET ID_HASHTAG = ?,
                        ID_PUBLICACION = ?
                    WHERE ID = ?",
                    $parametros);
    }
    public static function delete($id){
      $db = DWESBaseDatos::obtenerInstancia();
      $db->ejecuta("DELETE FROM HASHPUB WHERE ID = ?", $id);
    }
  }

?>
