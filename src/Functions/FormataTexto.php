<?php

namespace Forseti\Bot\SpaceJam\Functions;

class FormataTexto
{
    public static function formataTexto($string)
    {
        return trim(preg_replace("/\s+/", " ", $string));
    }
}