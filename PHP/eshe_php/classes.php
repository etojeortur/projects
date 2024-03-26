<?php
// Все названия классов пишутся с большой буквы
class Person {
    public $name = 'Artur';
    public $age = 25;
    public $isMarried = true;
    public function sayHello()
    {
        echo 'Hello my friend!';
    }
}

$person = new Person();
$person -> sayHello();
//echo $person -> age;