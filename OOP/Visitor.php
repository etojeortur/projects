<?php

namespace Oop;

class Visitor
{
    use HasRest;
    private string $name;
    private int $age;
    private array $hours;
    public function visit()
    {
        print_r('I\'m visiting');
    }
}