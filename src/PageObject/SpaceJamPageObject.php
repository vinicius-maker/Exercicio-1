<?php

namespace Forseti\Bot\SpaceJam\PageObject;

use Forseti\Bot\SpaceJam\Enums\Urls;
use Forseti\Bot\SpaceJam\Parser\SpaceJamParser;

class SpaceJamPageObject extends AbstractPageObject
{
    public function getPaginaSpaceJam()
    {
        $this->info('Capturando pagina do Space Jam');

        $response = $this->request('GET', Urls::SPACE_JAM);

        return new SpaceJamParser($response->getBody()->getContents());
    }
}