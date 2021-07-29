<?php


namespace App\Service\Services;


/**
 * Класс Создатель объявляет фабричный метод, который должен возвращать объект
 * класса Продукт. Подклассы Создателя обычно предоставляют реализацию этого
 * метода.
 */
abstract class Connector
{
    /**
     * Обратите внимание, что Создатель может также обеспечить реализацию
     * фабричного метода по умолчанию.
     */
    abstract public function getService(): Service;

    /**
     * Также заметьте, что, несмотря на название, основная обязанность Создателя
     * не заключается в создании продуктов. Обычно он содержит некоторую базовую
     * бизнес-логику, которая основана на объектах Продуктов, возвращаемых
     * фабричным методом. Подклассы могут косвенно изменять эту бизнес-логику,
     * переопределяя фабричный метод и возвращая из него другой тип продукта.
     */
    public function getSettings()
    {
        $service = $this->getService();
        return $service->getSettings();
    }

    public function getSetting(string $name)
    {
        $service = $this->getService();
        return $service->getSetting();
    }

    public function setSetting(string $name, $value)
    {
        $service = $this->getService();
        return $service->setSetting($name, $value);
    }
}
