<?php

namespace Forseti\Bot\SpaceJam\Parser;

use Forseti\Bot\SpaceJam\Iterator\SiteMapIterator;

class SiteMapParser extends AbstractParser
{
    public function getIterator()
    {
        return new SiteMapIterator($this->crawler->filterXPath('//body//center/table//tr'));
    }
}