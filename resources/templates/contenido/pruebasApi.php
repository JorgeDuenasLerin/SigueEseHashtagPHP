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
/*as_debug($phpData);*/

print_r(count($phpData->statuses));

$o = $phpData->statuses[0];
/*print_r($phpData->statuses[0]);*/

?>
