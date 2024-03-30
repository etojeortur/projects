<?php
class People
{
    public $name = 'Artur';
    public $age = 25;
    public $job = 'Developer';
    public function __construct(string $name, int $age, string $job)
    {
        $this->name = $name;
        $this->age = $age;
        $this->job = $job;
    }
}

class Developer extends People
{
    public $timePerWeek;
    public function work()
    {
        echo 'developer is working';
    }
    public function __construct(string $name, int $age, string $job, int $timePerWeek)
    {
        parent::__construct($name, $age, $job, $timePerWeek); // он берет родительский конструктор + можно изменить(добавить,удалить,поменять свойство)
        $this->timePerWeek = $timePerWeek;
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

$developer1 = new Developer('Artur', 25, 'Developer', 10);
echo $developer1->timePerWeek;
