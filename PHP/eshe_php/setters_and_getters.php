<?php
// Геттер это метод, который возвращает значение свойства класса

// Сеттер этто метод, который устанавливает значение свойства класса
// они получают какой-то наш аргумент и меняюти свойства класса

class Person {
    public $name = 'Artur';
    public $age = 25;
    // метод Setter
    public function setName($name) // функция по смене имени, вместо $name можно писать что угодно
    {
        $this->name = $name; // $this это плейсхолдер для будущих обектов класса
    } // так как мы не знаем как будет называться объект
    // метод Getter
    public function getAge()
    {
        return $this->age;
    }
}
$person1 = new Person();
$person2 = new Person();
// Использование Setter
$person2->setName('Evelina'); // сменили name у объекта класса
echo $person2->name;
// Использование Getter
echo $person2->getAge(); // вернули значение age



