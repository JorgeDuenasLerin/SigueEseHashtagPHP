<?php

$config = [
  'site' => 'Proyecto',
  'title' => 'Estructura de proyecto web',
  'content' => 'Estructura de proyecto web',
  'content_text' => 'Información sacada del config',
  'db_engine' => 'mysql',
  //'db_file' => 'resources/test.sqlite3',
  'db_user' => 'hashtag',
  'db_pass' => 'hashtag',
  'db_name' => 'hashtag',
  'ruta_defecto' => '/listadoHashtag.php',
  'mail_password' => 'cámbiala',
  'mail_correo' => 'miCorreo',
  'mail_server' => 'server',
];

require 'configuracion.privada.php';

spl_autoload_register(function ($name){
  global $ROOT;
  if(file_exists($class_file = "$ROOT/src/$name.php")){
    require($class_file);
  }else{
    if(file_exists($class_file = "$ROOT/src/Manager/$name.php")){
      require($class_file);
    }
  }
});
?>
