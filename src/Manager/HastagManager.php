<?php


  class hastagManager implements IDWESEntidadManager{

    public static function getAll(){
      $db = DWESBaseDatos::obtenerInstancia();
			$db->ejecuta('SELECT ID,NOMBRE FROM HASTAG');
			return $db->obtenDatos();
    }

    public static function getById($id){
      $db = DWESBaseDatos::obtenerInstancia();
      $db->ejecuta("SELECT * FROM HASTAG "." WHERE ID = '$id'");
      return $db->obtenDatos()[0];
    };

    public static function insert(...$campos){
      $db = DWESBaseDatos::obtenerInstancia();
			$db->ejecuta('INSERT INTO HASTAG (ID,NOMBRE) VALUES(?,?)',$campos);
    }

    public static function update($id, ...$campos){
      $db = DWESBaseDatos::obtenerInstancia();
			$db->ejecuta("UPDATE HASTAG SET ID='$id' WHERE ID ='$id';");
    }

    public static function delete($id){
			$db = DWESBaseDatos::obtenerInstancia();
			$db->ejecuta("DELETE FROM HASTAG WHERE ID='$id'");
		}

?>
