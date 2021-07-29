<?php


namespace App\Service\Services;


interface Service
{
    public function getSettings();
    public function setSetting(string $name, $value);
}