<?php

namespace Forseti\Bot\SpaceJam\Parser;

class SpaceJamParser extends AbstractParser
{
    public function getSiteMap()
    {
        return $this->crawler->filterXPath('//body//table[2]//tr[5]//td[3]/a')->attr('href');
    }
}