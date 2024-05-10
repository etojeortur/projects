<?php

class Plants
{
    public string $name;
    public string $height;
    public string $season;


    public function __construct(string $name, string $height, string $season)
    {
        $this->name = $name;
        $this->height = $height;
        $this->season = $season;
    }

}

class Trees extends Plants
{
    public function sayClass()
    {
        echo 'Это класс деревьев';
    }
}

$tree1 = new Trees('Bereza', '30 meters', 'Spring and summer');

class Flowers extends Plants
{
    public function sayClass()
    {
        echo 'Это класс цветов';
    }
}

$flower1 = new Flowers('Rose', '6 meters', 'Spring, summer, autumn');
