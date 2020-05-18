<?php

$hashtag = "#pizza";
$obj = peticionApi($hashtag);

$todoslosHashtag = HashtagManager::getAll();

/*dentro de [media] -> [media-url] = es la imagen dentro del tweet*/
$tweet = peticionTweetByID($obj['0']->{'id'});

/*as_debug($tweet,'el tweet');*/

/*as_debug($obj);*/


        $indice = 0;
foreach ($todoslosHashtag as $fila) {

        $resultado = peticionApi($fila['NOMBRE']);
        $ids = seleccionaById($resultado);

        $array[$fila['NOMBRE']][$indice]=$ids;
        $indice++;
        /*$insertFecha = $resultado['0']->created_at;
        $insertContenido = $resultado['0']->full_text;
        $insertId = $resultado['0']->id;*/
      /*  PublicacionManager::insert();*/
        //as_debug($insertId,"ejemplo de dato");
        //as_debug($resultado);
}

      as_debug($array,"array de todo");



?>
<link rel="stylesheet" href="/css/general.css">

<h1 class="centrar">Mostrar peticion twitter</h1><br><br>
