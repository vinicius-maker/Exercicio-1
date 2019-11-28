<?php

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

require '/vendor/autoload.php';

$client = new Client('GET', 'https://www.spacejam.com/archive/spacejam/movie/jam.htm');
$crawler = new Crawler();


$buscardor = new Buscador($client, $crawler);
$cursos = $buscardor->buscar('/cursos-online-programacao/php');

foreach ($cursos as $curso) {
    echo $curso;
}

