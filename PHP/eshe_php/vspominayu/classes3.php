<?php

class Employers
{
    public string $name;
    public int $age;
    public string $job;
    public function __construct(string $name, int $age, string $job)
    {
        $this->name = $name;
        $this->age = $age;
        $this->job = $job;
    }
}

class Cook extends Employers
{
    public int $timePerWeek;
    public function __construct(string $name, int $age, string $job, int $timePerWeek) // сначала прописал __construct и нажал на tab
    {
        parent::__construct($name, $age, $job);
        $this->timePerWeek = $timePerWeek;
    }
}

$cook1 = new Cook('Oleg', 26, 'Cook', 40);
print_r($cook1->timePerWeek);