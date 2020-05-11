<?php

areaPrivada();
if (isset($_GET)) {
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    HashtagManager::delete($id);
  }
  header('Location: administrador.php');
  die();
}
?>
