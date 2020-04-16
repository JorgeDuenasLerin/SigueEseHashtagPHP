<?php


  class usuarioManager implements IDWESEntidadManager{

    public static function autentificando($nombre){
      $db = DWESBaseDatos::obtenerInstancia();
      $db->ejecuta("SELECT id,nombre,pass,email 
                    FROM  USUARIO 
                    WHERE NOMBRE = ? ",
                    $nombre);
      return $db->obtenDatos();
    }
    public static function getAll(){
      $db = DWESBaseDatos::obtenerInstancia();
      $db->ejecuta("SELECT * FROM  USUARIO");
      return $db->obtenDatos();
    }
    public static function getById($id){
      $db = DWESBaseDatos::obtenerInstancia();
      $db->ejecuta("SELECT * FROM USUARIO WHERE ID = ?", $id);
      $fila = $db->obtenDatos()[0];
      print_r($fila);
      return
      new Usuario(
        $fila['id'],
        $fila['nombre'],
        $fila['pass'],
        $fila['email']
      );
    }
    public static function insert(...$campos){
      $db = DWESBaseDatos::obtenerInstancia();
      $db->ejecuta("INSERT INTO USUARIO (nombre, pass, email)
                    VALUES (?, ?, ?)",
                    $campos);
      return $db->getLastId();
    }
    public static function update($id, ...$campos){
      $db = DWESBaseDatos::obtenerInstancia();
       $db->ejecuta("UPDATE USUARIO
                    SET NOMbRE = ?,
                        PASS = ?,
                        EMAIL = ?
                    WHERE ID = ?",
                    $campos);
    }
    public static function delete($id){
      $db = DWESBaseDatos::obtenerInstancia();
      $db->ejecuta("DELETE FROM USUARIO WHERE ID = ?", $id);
    }
  }

?>
