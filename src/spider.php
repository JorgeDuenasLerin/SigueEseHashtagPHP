<?php
  $ROOT = realpath(__DIR__."/..");
  require_once("$ROOT/config/configuracion.php");
  require_once("$ROOT/src/funcionesComunes.php");
  require_once("$ROOT/src/funcionesApiTwitter.php");
  require_once("$ROOT/src/db.php");

  insercionEnBBDD();

?>
