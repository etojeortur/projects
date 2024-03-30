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
$manager = new Manager('Evelina', 19, 'Manager');
$developer = new Developer('Artur', 25, 'Developer');
$director = new Director('Svetlana', 46, 'Director');
echo $director->name . ' - ' . $director->job . ', ' . $director->age . "<br>";
echo $manager->name . ' - ' . $manager->job . ', ' . $manager->age . "<br>";
echo $developer->name;
