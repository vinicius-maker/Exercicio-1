<?php

namespace Forseti\Bot\SpaceJam\PageObject;

use Forseti\Bot\SpaceJam\Enums\Urls;
use Forseti\Bot\SpaceJam\Parser\SiteMapParser;

class SiteMapPageObject extends AbstractPageObject
{
    public function getSiteMapPageObject($href)
    {
        $this->info('Capturando Site Map');

        $response = $this->request('GET', Urls::SPACE_JAM.$href);

        return new SiteMapParser($response->getBody()->getContents());
    }
}