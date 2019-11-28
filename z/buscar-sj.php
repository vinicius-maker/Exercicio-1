<?php

require __DIR__.'/../vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client();
$resposta = $client->request('GET', 'https://www.spacejam.com/archive/spacejam/movie/jam.htm');

$html = $resposta->getBody()->getContents();

var_dump($html);

