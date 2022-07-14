<?php

namespace Forseti\Bot\SpaceJam\Parser;

use Symfony\Component\DomCrawler\Crawler;

abstract class AbstractParser
{
    protected $crawler;

    public function __construct($html)
    {
        $this->crawler = new Crawler();
        $this->crawler->addHtmlContent($html, 'UTF-8');
    }
}