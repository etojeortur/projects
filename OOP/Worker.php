<?php

namespace Oop;

// public доступен везде
// protected доступен только классам наследникам, объектам доступен не будет
// private не будет доступен нигде

abstract class Worker implements WorkerInterface // все наследники будут наследовать интерфейс тоже
    // абстрактный класс запрещает создавать от него объекты(у него мы описываем общие свойства и методы и будем от него наследоваться)
{
    private string $name; // лучше всегда использовать private и дополнять их геттерами и сеттерами
    private int $age;
    private array $hours;
    protected string $position;
    private int $experience;

    // abstract public function work(); // абстрактная функция используется, когда у классов наследников функция будет переопределяться
    // также она заставляет у классов наследников обязательно ее обозначить

    public function getName(): string
    {
        return $this->name;
    }
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getHours(): array
    {
        return $this->hours;
    }

    public function setHours(array $hours): void
    {
        $this->hours = $hours;
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