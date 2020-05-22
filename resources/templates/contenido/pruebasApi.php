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
           $usuario = $tweet->{'user'}->{'name'}; //o screen_nameç

           //para traernos la imagen puede ser esto
           //$URLImg =$tweet->{'retweeted_status'}->{'extended_entities'}->{'media'}[0]->{'media_url'};
           //$imagen->files->get($URLImg, array('alt' => 'media'));

           $imagen = $tweet->{'retweeted_status'}->{'extended_entities'}->{'media'}[0]->{'media_url'};

           as_debug($imagen,"imagen antes del if");

           if($imagen != ''){
             crearDirectorioSencillo($fila['NOMBRE'],$idExterno,$imagen);
           }else{
             $imagen= " no contiene imagen";
           }

           /*if($imagen != null){
             $archivo = file_get_contents($imagen);
             as_debug($archivo,"Url de la imagen");
             if( $archivo != false){
              // crearDirectorio($nombreHashtag,$idExterno,$archivo);
             }
             //PublicacionManager::insert($usuario,$contenido,$imagen,$fecha,$twitter,$idExterno);
             }else{
             $imagen = "null";
             //PublicacionManager::insert($usuario,$contenido,$imagen,$fecha,$twitter,$idExterno);
           }





          /* as_debug($usuario,"usuario");
           as_debug($fecha,"fecha");
           as_debug($contenido,"contenido");
           as_debug($imagen,"imagen");
           as_debug($idExterno,"idExterno");*/

           $twitter= "Twitter";
           //USUARIO,CONTENIDO,IMAGEN,FECHA,APLICACION,ID_TWITTER

          // as_debug($usuario,"usuario");
          // as_debug($fecha,"fecha");
           //as_debug($contenido,"contenido");
           //as_debug($imagen,"imagen");
          // as_debug($idExterno,"idExterno");

      }
}

?>
<link rel="stylesheet" href="/css/general.css">

<h1 class="centrar">Mostrar peticion twitter</h1><br><br>
