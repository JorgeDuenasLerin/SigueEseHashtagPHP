<?php

/*print_r($_GET['ID']);*/

if (isset($_GET) && count($_GET)!=0 ) {
  if (isset($_GET['ID'])) {
    $id = $_GET['ID'];
    $eliminado = HashtagManager::delete($id);
    print_r($eliminado);
    print_r($id);
  }

  //header('Location: administrador.php');
  die();
}

print_r($eliminado);
print_r($id);
?>
