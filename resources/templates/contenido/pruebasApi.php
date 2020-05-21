<?php

$hashtag = "#pizza";
$obj = peticionApi($hashtag);

$todoslosHashtag = HashtagManager::getAll();

foreach ($todoslosHashtag as $fila) {

        $resultado = peticionApi($fila['NOMBRE']);
        $ids = seleccionaById($resultado);
        as_debug($ids,"ids principal");


      for($indice = 0; $indice < count($ids); $indice++){

           $tweet = peticionTweetByID($ids[$indice]);

           $fecha = $tweet->{'created_at'};
           $idExterno = $tweet->{'id'};
           $contenido = $tweet->{'full_text'};
           $usuario = $tweet->{'user'}->{'name'}; //o screen_name
           $imagen = $tweet->{'retweeted_status'}->{'extended_entities'}->{'media'}[0]->{'media_url'};

           as_debug($usuario,"usuario");
           as_debug($fecha,"fecha");
           as_debug($contenido,"contenido");
           as_debug($imagen,"imagen");
           as_debug($idExterno,"idExterno");

           $twitter= "Twitter";
           //USUARIO,CONTENIDO,IMAGEN,FECHA,APLICACION,ID_TWITTER
           if($imagen != null){
             PublicacionManager::insert($usuario,$contenido,$imagen,$fecha,$twitter,$idExterno);
           }else{
             $imagen = "null";
             PublicacionManager::insert($usuario,$contenido,$imagen,$fecha,$twitter,$idExterno);
           }

      }
}


/*$tweet = peticionTweetByID($resultado[0]->{'id'});
as_debug($tweet,'el tweet');
      /*as_debug($array,"array de todo");*/



?>
<link rel="stylesheet" href="/css/general.css">

<h1 class="centrar">Mostrar peticion twitter</h1><br><br>
