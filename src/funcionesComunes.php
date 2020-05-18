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

    print_r(count($phpData->statuses));

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
    print_r($phpData);

    $obj = $phpData->statuses;

    return $obj;


  }

?>
