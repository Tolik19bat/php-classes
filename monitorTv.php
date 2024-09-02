<?php

declare(strict_types=1);
class MonitorTv
{
    // Конструктор класса MonitorTv, который принимает марку и размер экрана
    public function __construct(
        public string $brandTv, // Свойство для хранения марки телевизора
        public int $screenSize // Свойство для хранения размера экрана телевизора
    ) {
    }

    // Метод для получения марки тв
    public function getBrandTv() : string
    {
        return $this->brandTv;
    }

    // Метод для установки нового размера экрана
    public function setScreenSize($newScreenSize): int
    {
        // Проверка минимальной ширины экрана
        if ($newScreenSize < 320) {
            error_log("Размер экрана: не бывает!", 0);
            return 0;
        }
        return $this->screenSize = $newScreenSize; // Обновляем значение свойства screenSize
    }

    // Метод для получения размера экрана
    public function getScreenSize(): int
    {
        return $this->screenSize; // Возвращаем значение свойства screenSize
    }

     // метод получения полностью марки и размера в строковом формате
    public function getFullDataTv(): string
    {
        $screenSize = $this->screenSize; // Размер экрана
        $stringScreenSize = strval($screenSize);// Преобразование числа(размера экрана) в строку

        $brandTv = $this->brandTv; // Марка тв
        $lowercaseString = strtolower($brandTv); // Преобразование всех символов в нижний регистр
        $capitalizedString = ucfirst($lowercaseString); // Преобразование первой буквы в верхний регистр
        return $capitalizedString . ' ' . $stringScreenSize; // Полные данные тв: "Sony 1080"
    }
}

$monitor = new MonitorTv("SONY", 1080);
echo "марка: " . $monitor->getBrandTv()."\n";
echo "размер экрана: " . $monitor->getScreenSize()."\n";
echo "полные данные: " . $monitor->getFullDataTv()."\n";

unset($monitor);
