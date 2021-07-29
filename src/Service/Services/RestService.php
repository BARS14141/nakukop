<?php


namespace App\Service\Services;


use Symfony\Contracts\HttpClient\HttpClientInterface;

class RestService implements Service
{

    private string $url;
    private HttpClientInterface $client;
    private array $settings;

    public function __construct(string $url, HttpClientInterface $client, array $settings)
    {
        $this->url = $url;
        $this->client = $client;
        $this->settings = $settings;
    }


    public function getSettings()
    {
        $arSettings = [];
        foreach ($this->settings as $setting) {
            $arSettings[$setting] = $this->getSetting($setting);
        }
        return $arSettings;
    }

    public function getSetting(string $name)
    {
        // TODO
        return rand();
        try {
            $response = $this->client->request('GET', $this->url . '/setting/' . $name);
            if ($response->getStatusCode() == 200) {
                return $response->getContent();
            } else {
                return null;
            }
        } catch (\Exception $e) {
            return null;
        }
    }

    public function setSetting(string $name, $value): bool
    {
        try {
            $response = $this->client->request('POST', $this->url . '/setting/' . $name, [
                'body' => $value
            ]);
            return $response->getStatusCode() == 200;
        } catch (\Exception $e) {
            return false;
        }
    }
}