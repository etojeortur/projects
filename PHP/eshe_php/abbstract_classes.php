<?php
// Из абстрактных классов (abstract) нельзя создавать объекты, можно, например, от него наследовать
abstract class People
{
    public string $name = 'Artur';
    public int $age = 25;
    public string $job = 'Developer';
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
    public function __construct(string $name, int $age, string $job, int $timePerWeek)
    {
        $this->timePerWeek = $timePerWeek;
        parent::__construct($name, $age, $job);
    }
}

$developer1 = new Developer('Artur', 25, 'Back-end', 30);
echo $developer1->timePerWeek;