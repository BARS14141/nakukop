<?php


namespace App\Service\Services;


use App\Service\Services\GRPC\Field1;
use App\Service\Services\GRPC\Field2;
use App\Service\Services\GRPC\Field3;
use App\Service\Services\GRPC\Request;
use App\Service\Services\GRPC\SettingsClient;
use Grpc\ChannelCredentials;

class GRPCService implements Service
{

    private array $settings;
    private SettingsClient $client;

    public function __construct(string $url, array $settings)
    {
        $this->client = new SettingsClient($url, ['credentials' => new ChannelCredentials()]);
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
        try {
            switch ($name) {
                case 'field1':
                    $response = $this->client->getField1(new Request());
                    return $response->value;
                case 'field2':
                    $response = $this->client->getField2(new Request());
                    return $response->value;
                case 'field3':
                    $response = $this->client->getField3(new Request());
                    return $response->value;
            }
        } catch (\Exception $e) {
            return null;
        }
    }

    public function setSetting(string $name, $value): bool
    {
        try {
            switch ($name) {
                case 'field1':
                    $this->client->setField1(new Field1($value));
                    return true;
                case 'field2':
                    $this->client->setField2(new Field2($value));
                    return true;
                case 'field3':
                    $this->client->setField3(new Field3($value));
                    return true;
                default:
                    return false;
            }
        } catch (\Exception $e) {
            return false;
        }
    }
}