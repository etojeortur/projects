<?php

class Animal {
    public static $class_animal = 'Predator';
    public static $type = 'Cats';
    public $color;
    public $speed;
    public $avg_lifetime;
}
$tiger = new Animal();
$tiger->color = 'Orange and black';
$tiger->speed = 100;
$tiger->avg_lifetime = 12;

$leon = new Animal();
$leon->color = 'Yellow';
$leon->speed = 80;
$leon->avg_lifetime = 14;

$cat = new Animal();
$cat->color = 'White';
$cat->speed = 60;
$cat->avg_lifetime = 10;

$panther = $leon;
$panther->color = 'Black';
$panther->speed = 120;
echo $panther->color . "<br>";
echo $panther->speed . "<br>";
echo $leon->color . "<br>";
echo $leon->speed;
