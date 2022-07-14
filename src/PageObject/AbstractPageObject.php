<?php

namespace Forseti\Bot\SpaceJam\PageObject;

use Forseti\Bot\SpaceJam\Factory\GuzzleClientFactory;
use Forseti\Bot\SpaceJam\Traits\ForsetiLoggerTrait;
use GuzzleHttp\ClientInterface;

abstract class AbstractPageObject
{
    use ForsetiLoggerTrait;

    protected $client;

    public function __construct(ClientInterface $client = null)
    {
        $this->client = ($client) ? $client:GuzzleClientFactory::getInstance();
    }

    public function request($method, $url, array $params = [])
    {
        try {
            return $this->client->request($method, $url, $params);
        } catch (\Exception $e){
            $this->error($e->getMessage());
            return null;
        }
    }
}