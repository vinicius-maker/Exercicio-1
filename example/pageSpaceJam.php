<?php

use Forseti\Bot\SpaceJam\PageObject\SiteMapPageObject;
use Forseti\Bot\SpaceJam\PageObject\SpaceJamPageObject;

require 'vendor/autoload.php';

$spaceJamPageObject = new SpaceJamPageObject();
$siteMapPageObject = new SiteMapPageObject();

$href = $spaceJamPageObject->getPaginaSpaceJam()->getSiteMap();
$html = $siteMapPageObject->getSiteMapPageObject($href)->getIterator()->current();

//$textoTratado = \Forseti\Bot\SpaceJam\Functions\FormataTexto::formataTexto($html);

var_dump($html);