<?php

namespace Oop;

// public доступен везде
// protected доступен только классам наследникам, объектам доступен не будет
// private не будет доступен нигде

class Worker
{
    private string $name; // лучше всегда использовать private и дополнять их геттерами и сеттерами
    private int $age;
    private array $hours;
    protected string $position;
    private int $experience;
    public function work() : void
    {
        print_r('I\'m working');
    }

    public function setPosition(string $position): void // сеттер это метод, который будет присваивать значение свойству
    {
        $this->position = $position;
    }

    public function getPosition() : string // геттер это метод, который будет возвращать значение свойства
    {
        return $this->position;
    }


}