<?php
class Person{
    public $name = 'Artur';
    public $age = 25;
    public $hobby = 'Gym';
    public $isMarried = false;

    // __construct(конструктор) позволяет создавать объекты класса автоматически
    public function __construct($name, $age, $hobby)
    {
        $this->name = $name;
        $this->age = $age;
        $this->hobby = $hobby;
    }
}

$person1 = new Person('Evelina', 19, 'Shopping');
echo "Имя: $person1->name, возраст: $person1->age, хобби: $person1->hobby";