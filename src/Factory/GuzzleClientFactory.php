<?php

namespace Forseti\Bot\SpaceJam\Factory;

use Forseti\Bot\SpaceJam\Enums\Urls;
use GuzzleHttp\Client;

class GuzzleClientFactory
{
    public static function getInstance()
    {
        $config = [
            'cookies' => true,
            'verify' => false,
            'headers' => [
                'User-Agent' => Urls::USER_AGENT_BASE_TEST,
            ]
        ];
        return new Client($config);
    }
}