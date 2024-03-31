<?php
// Интерфейс(контракт) это список методов, которые нужно обязательно реализовать в классе

interface Sportsmen
{
    public function run();

    public function gym();

    public function eat();

    public function sleep();
}

class Bodybuilder implements Sportsmen // здесь используется implements вместо extends как в наследовании класса
{
    public function run()
    {
        echo 'Мне нужно побегать 7 минут';
    }

    public function gym()
    {
        echo 'Мне нужно потренироваться';
    }

    public function eat()
    {
        echo 'Мне нужно поесть';
    }

    public function sleep()
    {
        echo 'Мне нужно поспать';
    }
}

class Qwerty extends Bodybuilder
{
    public static function echo()
    {
        echo 'Это мой список дел';
    }
}

$qwerty = new Qwerty();
$qwerty::echo();
