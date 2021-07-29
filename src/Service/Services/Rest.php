<?php


namespace App\Service\Services;


use Symfony\Contracts\HttpClient\HttpClientInterface;

class Rest extends Connector
{

    private $url;
    private HttpClientInterface $client;
    private array $settings;

    public function __construct(string $url, HttpClientInterface $client, array $settings)
    {
        $this->url = $url;
        $this->client = $client;
        $this->settings = $settings;
    }

    public function getService(): Service
    {
        return new RestService($this->url, $this->client, $this->settings);
    }

}