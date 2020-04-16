<?php 

class PublicacionManager implements IDWESEntidadManager{
  public static function getAll(){
    $db = DWESBaseDatos::obtenerInstancia();
    $db->ejecuta('SELECT ID,NOMBRE,CONTENIDO,IMAGEN,FECHA,APLICACION 
                  FROM PUBLICACION');
    return $db->obtenDatos();
  }

  public static function getById($id){
    $db = DWESBaseDatos::obtenerInstancia();
    // TODO: Consulta preparada
    // "SELECT * FROM HASTAG WHERE ID = ?"
    $db->ejecuta("SELECT * FROM PUBLICACION WHERE ID = ?");
    return $db->obtenDatos()[0];
  }

  public static function insert(...$campos){
    $db = DWESBaseDatos::obtenerInstancia();
    //TODO: Cuidado con el campo autoincremental
    $db->ejecuta("INSERT INTO PUBLICACION 
                    (ID,NOMBRE,CONTENIDO,IMAGEN,FECHA,APLICACION)
                   VALUES(?,?,?,?,?,?)",
                   $campos);
  }

  public static function update($id, ...$campos){
    $db = DWESBaseDatos::obtenerInstancia();
    //TODO: Actualizar nombre XXXX para id N
    //TODO: Preparar consultas
    $db->ejecuta("UPDATE PUBLICACION 
                  SET ID = ?,
                      NOMBRE = ?,
                      CONTENIDO = ?,
                      IMAGEN = ?,
                      FECHA = ?,
                      APLICACION = ?
                   WHERE ID =?",$campos);
  }

  public static function delete($id){
    $db = DWESBaseDatos::obtenerInstancia();
    //TODO: Preparar consulta
    $db->ejecuta("DELETE FROM PUBLICACION WHERE ID=?");
  }





}



?>