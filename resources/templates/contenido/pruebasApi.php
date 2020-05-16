<?php

require('vendor/autoload.php');

require("config/configuracion.php");

/*print_r($config);*/

$usuario="telepizza";
$hastag="#pizza";

$turl = 'https://api.twitter.com';
$petciónURL = "/1.1/search/tweets.json";
$getfield = "?q=from:$hastag&tweet_mode=extended";
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

$o = $phpData->statuses[0];
/*print_r($phpData->statuses[0]);*/
as_debug($o);
/*print_r("id del usuario");
as_debug($o[0]->id);*/

?>

<link rel="stylesheet" href="/css/general.css">
<h1 class="centrar">mostrar peticion twitter</h1><br><br>
<div class="tabla">
    <?php foreach($o as $fila) { ?>
        <p><?=$fila->{'created_at'}?></p>
        <p><?=$fila->{'id'}?></p>
        <p><?=$fila->{'full_text'}?></p>
    <?php } ?>

</div>
