<?php

declare(strict_types=1);
class MonitorTv
{
    //это статический метод, он ни чего не выражает в этой задаче.
    public static array $brandTvs = [
        'xlsx',
        'csv',
        'doc'
    ];

    // Конструктор класса MonitorTv, который принимает марку и размер экрана тв
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

    // Метод для получения размера экрана
    public function getScreenSize(): int
    {
        return $this->screenSize; // Возвращаем значение свойства screenSize
    }

    // Метод для установки нового размера экрана
    public function setScreenSize($newScreenSize): int
    {
        // Проверка минимальной ширины экрана
        if ($newScreenSize < 320) {
            error_log("не бывает такого !", 0);
            return 0;
        }
        return $this->screenSize = $newScreenSize; // Обновляем значение свойства screenSize
    }

     // метод получения полностью марки и размера в строковом формате
    public function getFullDataTv(): string
    {
        $brandTv = $this->brandTv; // Марка тв
        $lowercaseString = strtolower($brandTv); // Преобразование всех символов в нижний регистр
        $capitalizedString = ucfirst($lowercaseString); // Преобразование первой буквы в верхний регистр

        $screenSize = $this->screenSize; // Размер экрана
        $stringScreenSize = strval($screenSize);// Преобразование числа(размера экрана) в строку

        return $capitalizedString . ' ' . $stringScreenSize; // Полные данные тв: "Sony 1080"
    }
}

$monitor = new MonitorTv("SONY", 1080);
echo'статический метод $brandTvs::'.MonitorTv::$brandTvs[0];
echo 'марка: ' . $monitor->getBrandTv()."\n";
echo 'размер экрана: ' . $monitor->getScreenSize()."\n";
echo 'полные данные: ' . $monitor->getFullDataTv()."\n";
//меняем размер экрана с проверкой
echo 'новый размер: ' . $monitor->setScreenSize(310)."\n";
unset($monitor);
