<?php
// Статик позволяет представить класс как объект
// Статик методы/свойсвта всегда принадлежат классам
 class Person
{
    public static string $name;
    public static function setName($name)
    {
        self::$name = $name; // через self обращаемся к нашему статику $name
    }
}
// Статический метод/свойство вызывается через двойное двоеточие
Person::setName('Artur');
//echo Person::$name;

$person = new Person();
$person::setName('Evelina'); // перезаписали $name у класса
//echo $person::$name;

class Person1 extends Person
{

}

$person1 = new Person1();
echo $person1::$name; // так же выведет Evelina