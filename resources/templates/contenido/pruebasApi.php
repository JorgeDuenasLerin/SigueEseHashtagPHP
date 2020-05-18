<?php

$hashtag = "#coronavirus";
$obj = peticionApi($hashtag);

$todoslosHashtag = HashtagManager::getAll();

$id = '1260512019276533760';
$tweet = peticionTweetByID($id);

as_debug($tweet,'el tweet');


foreach ($todoslosHashtag as $fila) {
        $resultado = peticionApi($fila['NOMBRE']);
        $insertFecha = $resultado['0']->created_at;
        $insertContenido = $resultado['0']->full_text;
        $insertId = $resultado['0']->id_str;
      /*  PublicacionManager::insert($);*/
        //as_debug($insertId,"ejemplo de dato");
        //as_debug($resultado);
}



?>
<link rel="stylesheet" href="/css/general.css">

<h1 class="centrar">Mostrar peticion twitter</h1><br><br>
<div class="tabla">
    <?php foreach($resultado as $fila) { ?>
        <p><?=$fila->{'created_at'}?></p>
        <p><?=$fila->{'id'}?></p>
        <p><?=$fila->{'full_text'}?></p>
    <?php } ?>

    <h1>otro for </h1>
    <?php foreach($obj as $fila) { ?>
        <p><?=$fila->{'created_at'}?></p>
        <p><?=$fila->{'id'}?></p>
        <p><?=$fila->{'full_text'}?></p>
        <h1>tweet nuevo</h1>
        <br>
        <br>

    <?php } ?>

</div>





