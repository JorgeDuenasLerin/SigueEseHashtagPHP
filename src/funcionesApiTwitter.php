<?php
    require("$ROOT/vendor/autoload.php");
    require("$ROOT/config/configuracion.php");

function peticionApi($hashtag){
    global $ROOT;
    global $config;
    $turl = 'https://api.twitter.com';
    $petciónURL = "/1.1/search/tweets.json";
    $getfield = "?q=from:#$hashtag&tweet_mode=extended";
    $url = "$turl$petciónURL";
    $requestMethod = 'GET';

    $twitter = new TwitterAPIExchange($config);
    $data = $twitter->setGetfield($getfield)
        ->buildOauth($url, $requestMethod)
        ->performRequest();

    $phpData = json_decode($data);
    //as_debug($phpData->statuses[0]);
    //print_r(count($phpData->statuses));
    $obj = $phpData->statuses;
    return $obj;

}
function peticionTweetByID($id){

    global $ROOT;
    global $config;

    $turl = 'https://api.twitter.com';
    $petciónURL = "/1.1/statuses/show.json";
    $getfield = "?id=$id&tweet_mode=extended";
    $url = "$turl$petciónURL";
    $requestMethod = 'GET';

    $twitter = new TwitterAPIExchange($config);
    $data = $twitter->setGetfield($getfield)
        ->buildOauth($url, $requestMethod)
        ->performRequest();

    $phpData = json_decode($data);
    $obj = $phpData;

    return $obj;
  }

function seleccionaById($obj){
    $resultadoId = [];
    for($indice = 0; $indice < count($obj); $indice++){
      $resultadoId[$indice] = $obj[$indice]->{'id'};
    }
    return $resultadoId;
  }

  //funciona que guarda las imagenes en la BBDD
function guardarImagen($hashtag,$id,$imagen){
    global $ROOT;
    global $config;

    $fichero = file_get_contents($imagen);
    $nombreImg = explode('/',$imagen);

    $dirHashtag = "$hashtag";
    $dirID = "$id";
    $nombre = $nombreImg[count($nombreImg)-1];

    $rutaSEHDir = "/$dirHashtag/$dirID/";
    $rutaSEH = "$rutaSEHDir$nombre";

    $rutaURLImagenParaBD = $config['img_in_url'] . $rutaSEH;
    $rutaFísicaDeFichero = $ROOT . $config['img_path'] . $rutaSEH;

    /*as_debug($rutaFísicaDeFichero, "Fichero físico en -> "); // Donde debéis guardar el fichero
    as_debug($rutaURLImagenParaBD, "Ruta imgen en base de datos -> ");
    */

    mkdir($ROOT . $config['img_path'] . $rutaSEHDir, 0777, true);
    file_put_contents($rutaFísicaDeFichero, $fichero);

    return $rutaURLImagenParaBD;

  }

function insercionEnBBDD(){
    global $ROOT;
    global $config;
    $todoslosHashtag = HashtagManager::getAll();
    $countPublicaciones  = PublicacionManager::getAll();
    foreach ($todoslosHashtag as $fila) {

      $resultado = peticionApi($fila['NOMBRE']);
      $ids = seleccionaById($resultado);
      //as_debug($ids,"ids principal");
      for($indice = 0; $indice < count($ids); $indice++){
        $tweet = peticionTweetByID($ids[$indice]);
        $fecha = $tweet->{'created_at'};
        $idExterno = $tweet->{'id'};
        $contenido = $tweet->{'full_text'};
        $convertidoContenido = utf8_encode($contenido);
        $usuario = $tweet->{'user'}->{'name'}; //o screen_name
        $convertidoUsuario = utf8_encode($usuario);
        $twitter= "Twitter";
        //para traernos la imagen puede ser esto
        $imagen = $tweet->{'retweeted_status'}->{'extended_entities'}->{'media'}[0]->{'media_url'};
        if(idTwetExists($idExterno) /*|| count($countPublicaciones)== 0*/ ){
          if($imagen != ''){
            $urlImagen = guardarImagen($fila['NOMBRE'],$idExterno,$imagen);
          }else{
            $urlImagen= "null";

          }
        PublicacionManager::insert($convertidoUsuario,$convertidoContenido,$urlImagen,$fecha,$twitter,$idExterno);
        $idPublicacion = PublicacionManager::getIdByIdTweet($idExterno);
        $idHashtag = HashtagManager::getIdByNombre($fila['NOMBRE']);
        HashpubManager::insert($idHashtag,$idPublicacion);
        }
      }
    }
}

function idTwetExists($idExterno){
  $idBd = PublicacionManager::getAllIdTweet($idExterno);

  //as_debug($idBd,"id de la funcion ");
  $existe = '';
  if($idBd != $idExterno){
    //as_debug($idBd,"no existe");
    //as_debug(true);
    return $existe = true;
  }else {
    //as_debug($idBd,"si existe");
    //as_debug(false);
    return $existe = false;

  }
}
function startsWith ($string, $startString) {
    $len = strlen($startString);
    return (substr($string, 0, $len) === $startString);
}
?>
