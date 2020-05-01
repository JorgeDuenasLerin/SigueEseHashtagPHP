<?php

/*print_r($_GET['ID']);*/

if (isset($_GET) && count($_GET)!=0 ) {
  if (isset($_GET['ID'])) {
    $id = $_GET['ID'];
    HashtagManager::delete($id);
  }
  header('Location: administrador.php');
  die();
}


?>
