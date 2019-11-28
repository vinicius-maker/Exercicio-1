<?php

namespace Forseti\Bot\SpaceJam\Parser;

use Forseti\Bot\SpaceJam\Iterator\TituloIterator;

class FilterParser extends AbstractParse
{
    public function getUrl()
    {
        return $this->crawler->filter('title')->text();
    }

    public function getUrlSiteMapa()
    {
        return $this->crawler->filterXPath('//html/body/center/table[2]/tr[5]/td[3]/a')->attr('href');
    }

    public function getIterator()
    {
        $filterPaser = $this->crawler->filterXPath('//body/center/table');
        return new TituloIterator($filterPaser);
    }
}