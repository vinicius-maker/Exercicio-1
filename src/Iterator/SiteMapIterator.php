<?php

namespace Forseti\Bot\SpaceJam\Iterator;

class SiteMapIterator extends AbstractIterator
{
    public function current()
    {
        return $this->iterator->current()->getElementsByTagName('td')->item(2)->textContent;
    }
}