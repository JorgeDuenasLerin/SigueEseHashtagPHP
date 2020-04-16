<?php

// TODO: Cambiar nombre de ficher por nombre bueno
  class HashtagManager implements IDWESEntidadManager{

    public static function getAll(){
      $db = DWESBaseDatos::obtenerInstancia();
			$db->ejecuta('SELECT ID,NOMBRE FROM HASHTAG');
			return $db->obtenDatos();
    }

    public static function getById($id){
      $db = DWESBaseDatos::obtenerInstancia();
      // TODO: Consulta preparada
      // "SELECT * FROM HASTAG WHERE ID = ?"
      $db->ejecuta("SELECT * FROM HASHTAG  WHERE ID = ?",$id);
      return $db->obtenDatos()[0];
    }

    public static function insert(...$campos){
      $db = DWESBaseDatos::obtenerInstancia();
      //TODO: Cuidado con el campo autoincremental
			$db->ejecuta("INSERT INTO HASHTAG (ID,NOMBRE,ID_USUARIO) 
                    VALUES(?,?,?)",
                    $campos);
    }

    public static function update($id, ...$campos){
      $db = DWESBaseDatos::obtenerInstancia();
      //TODO: Actualizar nombre XXXX para id N
      //TODO: Preparar consultas
			$db->ejecuta("UPDATE HASHTAG SET ID = ? WHERE ID = ?",$campos);
    }

    public static function delete($id){
			$db = DWESBaseDatos::obtenerInstancia();
      //TODO: Preparar consulta
			$db->ejecuta("DELETE FROM HASHTAG WHERE ID = ?",$id);
		}

?>
