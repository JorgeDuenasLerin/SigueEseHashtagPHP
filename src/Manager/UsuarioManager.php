<?php


  class usuarioManager implements IDWESEntidadManager{

    public static function getAll();
    public static function getById($id);
    public static function insert(...$campos);
    public static function update($id, ...$campos);
    public static function delete($id);
  }

?>
