<?php

// TODO: Cambiar nombre de ficher por nombre bueno
  class HashtagManager implements IDWESEntidadManager{

    public static function getAll(){
      $db = DWESBaseDatos::obtenerInstancia();
			$db->ejecuta('SELECT * FROM HASHTAG');
			return $db->obtenDatos();
    }

    public static function getById($id){
      $db = DWESBaseDatos::obtenerInstancia();
      $db->ejecuta("SELECT * FROM HASHTAG  WHERE ID = ?",$id);
      return $db->obtenDatos()[0];
    }

    public static function insert(...$campos){
      $db = DWESBaseDatos::obtenerInstancia();
      //TODO: Cuidado con el campo autoincremental
			$db->ejecuta("INSERT INTO HASHTAG (NOMBRE,ID_USUARIO)
                    VALUES(?,?);",
                    $campos);
    }

    public static function update($id, ...$campos){
      $parametros = $campos;
      array_push($parametros, $id);
      $db = DWESBaseDatos::obtenerInstancia();
			$db->ejecuta("UPDATE HASHTAG SET NOMBRE = ? ,ID_USUARIO = ?  WHERE ID = ?",$parametros);
    }

    public static function delete($id){
			$db = DWESBaseDatos::obtenerInstancia();
			$db->ejecuta("DELETE FROM HASHTAG WHERE ID = ?",$id);
    }
  }

?>
