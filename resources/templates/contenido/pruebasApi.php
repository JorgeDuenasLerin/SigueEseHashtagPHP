<?php



$hashtag = "#coronavirus";
$obj = peticionApi($hashtag);



?>

<link rel="stylesheet" href="/css/general.css">
<h1 class="centrar">Mostrar peticion twitter</h1><br><br>
<div class="tabla">
    <?php foreach($obj as $fila) { ?>
        <p><?=$fila->{'created_at'}?></p>
        <p><?=$fila->{'id'}?></p>
        <p><?=$fila->{'full_text'}?></p>
        <h1>tweet nuevo</h1>
        <br>
        <br>

    <?php } ?>

</div>
