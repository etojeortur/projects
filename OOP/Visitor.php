<?php

namespace Oop;

class Visitor
{
    private string $name;
    private int $age;
    private array $hours;
    public function visit()
    {
        print_r('I\'m visiting');
    }
}