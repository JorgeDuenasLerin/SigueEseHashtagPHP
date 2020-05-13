<?php

require('vendor/autoload.php');

require("config/configuracion.php");

print_r($config);

$usuario="telepizza";
$hastag="#pizza";

$turl = 'https://api.twitter.com';
$petciónURL = "/1.1/statuses/show.json";
$getfield = "?id=1260512019276533760&tweet_mode=extended";
$url = "$turl$petciónURL";
$requestMethod = 'GET';

echo "$url";


$twitter = new TwitterAPIExchange($config);
$data = $twitter->setGetfield($getfield)
    ->buildOauth($url, $requestMethod)
    ->performRequest();

$phpData = json_decode($data);
print_r($phpData);


?>
