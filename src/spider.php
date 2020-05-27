<?php
  $ROOT = realpath(__DIR__."/..");
  require_once("$ROOT/config/configuracion.php");
  require_once("$ROOT/src/funcionesComunes.php");
  require_once("$ROOT/src/funcionesApiTwitter.php");
  require_once("$ROOT/src/db.php");
  
  insercionEnBBDD();
/*$totalPublicaciones = count(PublicacionManager::getAll());

if($totalPublicaciones != 0 || $totalPublicaciones == 0){
  insercionEnBBDD();
}*/

/*$time = date("G:i:s");
$entry = "Información guardada a las $time.\n";
$file = "/var/www/testdir/test.cron.txt";
$open = fopen($file,"a");

if ( $open ) {
	fwrite($open,$entry);
	fclose($open);
}
*/

?>
