<?php
function as_debug($que, $msg=""){
  echo "<pre>";
  echo $msg;
  print_r($que);
  echo "</pre>";
}
function clear_input($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
function gestionaErrores($post, &$info, &$errores){
  foreach($post as $key=>$value){
      if ( isset($post[$key]) && $value != '' ){
        $info[$key] = clear_input($value);
      } else{
        $errores[$key] = "ERROR ".strtoupper($key);
      }
  }
}
function areaPrivada(){
  if(!isset($_SESSION['autentificado']) || $_SESSION['autentificado'] != true ){
  //if($_SESSION['autentificado'] !=true){
      header('Location: login.php');
      die();
  }
}

function peticionApi($hashtag){

    require('vendor/autoload.php');

    require("config/configuracion.php");

    $turl = 'https://api.twitter.com';
    $petciónURL = "/1.1/search/tweets.json";
    $getfield = "?q=from:$hashtag&tweet_mode=extended";
    $url = "$turl$petciónURL";
    $requestMethod = 'GET';

    /*echo "$url";*/


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
    require('vendor/autoload.php');
    require("config/configuracion.php");

    $turl = 'https://api.twitter.com';
    $petciónURL = "/1.1/statuses/show.json";
    $getfield = "?id=$id&tweet_mode=extended";
    $url = "$turl$petciónURL";
    $requestMethod = 'GET';

    echo "$url";


    $twitter = new TwitterAPIExchange($config);
    $data = $twitter->setGetfield($getfield)
        ->buildOauth($url, $requestMethod)
        ->performRequest();

    $phpData = json_decode($data);
    //as_debug($phpData);

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
//funccion que crea directorio para guardar imagenes
/*  function crearDirectorio($hashtag,$tweet,$imagen){

    /*$idTweet = PublicacionManager::getByIdTweet($tweet);*/
    /*$ruta = "$ROOT/public/imagenes/$hashtag/$tweet/";
    as_debug($tweet);
    as_debug($ruta);

    mkdir($ruta,0777,false);

    file_put_contents($ruta,$imagen, FILE_APPEND);

  }*/


  //funciona te crea el directorio
function crearDirectorioSencillo($hashtag,$id,$imagen){
    global $ROOT;
    global $config;

    as_debug($imagen, "url");

    $fichero = file_get_contents($imagen);
    //as_debug($fichero,"Fichero de la imagen ");
    //as_debug($fichero[count($fichero)-1],"imagen sola ");

    $dirHashtag = "pizza";
    $dirID = "1234";
    $nombre = "imagendeTT.jpg";

    $rutaSEHDir = "/$dirHashtag/$dirID/";
    $rutaSEH = "$rutaSEHDir$nombre";

    $rutaURLImagenParaBD = $config['img_in_url'] . $rutaSEH;
    $rutaFísicaDeFichero = $ROOT . $config['img_path'] . $rutaSEH;


    as_debug($rutaFísicaDeFichero, "Fichero físico en -> "); // Donde debéis guardar el fichero
    as_debug($rutaURLImagenParaBD, "Ruta imgen en base de datos -> ");

    mkdir($ROOT . $config['img_path'] . $rutaSEHDir, 0777, true);

    file_put_contents($rutaFísicaDeFichero, $fichero);

    /*
    $ruta = "./././public/imagenes/$hashtag/$id";
    as_debug($ruta,"Ruta ");
    mkdir($ruta,0777,true);
    //$rutaNueva = "./././public/imagenes/$hashtag/$id";
    //as_debug($rutaNueva,"Ruta nueva");
    file_put_contents($ruta,$fichero);*/
  }

function descargaImg($algo){


  }


function startsWith ($string, $startString) {
    $len = strlen($startString);
    return (substr($string, 0, $len) === $startString);
}
?>
