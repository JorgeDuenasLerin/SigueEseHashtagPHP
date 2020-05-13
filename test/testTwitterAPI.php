<?php

require('vendor/autoload.php');

require("config/configuracion.php");

print_r($config);

$usuario="telepizza";
$hastag="#pizza";

$turl = 'https://api.twitter.com';
$petciónURL = "/1.1/search/tweets.json";
$getfield = "?q=from:$usuario OR $hastag";
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
