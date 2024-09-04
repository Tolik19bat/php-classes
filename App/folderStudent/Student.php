<?php

declare(strict_types=1);

namespace App\folderStudent;

class Student
{
    // Конструктор класса Student, который принимает имя студента
    public function __construct(
        public string $firstName,
        public string $lastName,
        public string $city,
    )
    {
    }

    // Это статический метод он ни чего не выражает в этой задаче, просто из лекции
    public const MAP = [
        'xlsx',
        'csv',
        'doc'
    ];

    // Метод для получения имени студента
    public function getFirstName(): string
    {
        return $this->firstName; // Возвращаем значение свойства name
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    // Метод получения города
    public function getCity(): string
    {
        return $this->city;
    }

    // Метод для получения полных данных студента
    public function fullData(): string
    {
        return $this->firstName . ' ' . $this->lastName . ', ' . $this->city;
    }
}

echo 'статический метод MAP[0]: ' . Student::MAP[0] . "\n";
$student = new Student('имя', 'фамилия', 'город');
echo 'student: ' . $student->getFirstName() . "\n";
echo 'student: ' . $student->getLastName() . "\n";
echo 'student: ' . $student->getCity() . "\n";
echo 'student: ' . $student->fullData() . "\n";

unset($student); // Очищаем данные из памяти
