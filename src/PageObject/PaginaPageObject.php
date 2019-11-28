<?php

namespace Forseti\Bot\SpaceJam\PageObject;

use Forseti\Bot\SpaceJam\Parser\FilterParser;

class PaginaPageObject extends AbstractPageObject
{


    public function getResposta()
    {
        $resposta = $this->client->request('GET', 'https://www.spacejam.com/archive/spacejam/movie/jam.html');
        return $resposta;
    }

    public function getHtml()
    {
        $paginaPageObject = $this->getResposta()->getBody()->getContents();
        return $paginaPageObject;

    }

    public function getRespostaSiteMapa()
    {
        return $this->client->request('GET','https://www.spacejam.com/archive/spacejam/movie/cmp/sitemap.html');
    }

    public function getHtmlSiteMapa()
    {
        $paginaPageObject = $this->getRespostaSiteMapa()->getBody()->getContents();
        return $paginaPageObject;
    }

    public function getParser()
    {
        return new FilterParser($this->getHtmlSiteMapa());
    }

    public function getParser2()
    {
        return new FilterParser($this->getHtml());
    }
}