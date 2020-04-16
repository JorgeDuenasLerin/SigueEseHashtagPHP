<?php

$config = [
  'site' => 'Proyecto',
  'title' => 'Estructura de proyecto web',
  'content' => 'Estructura de proyecto web',
  'content_text' => 'Información sacada del config',
  'db_engine' => 'sqlite',
  'db_file' => 'resources/test.sqlite3',
  'ruta_defecto' => '/inicio.php'
];

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
