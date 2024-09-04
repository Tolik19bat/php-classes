<?php

declare(strict_types=1);

namespace App\folderAuto;

class Auto
{
    private string $brand; // Свойство для хранения марки автомобиля

    private int $model; // Свойство для хранения модели автомобиля

    // Конструктор класса Auto, который принимает марку и модель автомобиля
    public function __construct($brand, $model)
    {
        $this->brand = $brand; // Установка значений свойств brand и model
        $this->model = $model;
    }

    // Метод для получения марки автомобиля
    public function getBrand(): string
    {
        return $this->brand; // Возвращаем значение свойства brand
    }

    // Метод для установки новой марки автомобиля
    public function setBrand($newBrand): string
    {
        return $this->brand = $newBrand; // Обновляем значение свойства brand
    }

    // Метод для получения модели автомобиля
    public function getModel(): int
    {
        return $this->model; // Возвращаем значение свойства model
    }

    // Метод для установки новой модели автомобиля
    public function setModel($newModel): int
    {
        return $this->model = $newModel; // Обновляем значение свойства model
    }
}

$auto = new Auto('AUDI', 200); // Создаём экземпляр класса
echo 'Название:' . $auto->getBrand() . "\n"; // Получаем название
echo 'Модель:' . $auto->getModel() . "\n"; // Получаем модель
echo 'Новое название: ' . $auto->setBrand('PORSCHE') . "\n";
echo 'Новая модель: ' . $auto->setModel(911) . "\n";

unset($auto); // Очищаем данные из памяти
