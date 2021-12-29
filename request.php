<?php 
require 'vendor/autoload.php';
use GuzzleHttp\Client;
$client = new Client(
  ['base_uri' => 'http://jsonplaceholder.typicode.com/']
);


$response = $client->get(
  'posts/1'
);
echo $response->getBody();

$response = $client->get(
  'posts/2'
);
echo $response->getBody();

$response = $client->get(
  'comments/1'
);
echo $response->getBody();

//Gets the IP adress
$response = $client->get(
  'http://httpbin.org/ip'
);
echo $response->getBody();