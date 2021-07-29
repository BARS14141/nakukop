<?php


namespace App\Service\Services;


use Symfony\Contracts\HttpClient\HttpClientInterface;

class GRPC extends Connector
{

    private $url;
    private array $settings;

    public function __construct(string $url, array $settings)
    {
        $this->url = $url;
        $this->settings = $settings;
    }

    public function getService(): Service
    {
        return new GRPCService($this->url, $this->settings);
    }

}