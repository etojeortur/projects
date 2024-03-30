<?php
// Наследование (extends) копирует свойства класса из одного в другой
class People
{
    public $name = 'Artur';
    public $age = 25;
    public $job = 'Developer';

}

class Developer extends People
{
    public function work()
    {
        echo 'developer is working';
    }
}

class Director extends People
{
    public function work()
    {
        echo 'director is working';
    }
}

class Manager extends People
{
    public function work()
    {
        echo 'manager is working';
    }
}
$manager = new Manager();
echo $manager->name;