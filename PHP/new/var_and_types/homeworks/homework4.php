<?php
class People {
    public $name;
    public $second_name;
    public $age;
    public $city;
    public $gender;
}
$evelina = new People();
$evelina -> name = 'Evelina';
$evelina -> second_name = 'Mayorova';
$evelina -> age = 19;
$evelina -> city = 'Kazan';
$evelina -> gender = 'Female';

$artur = new People();
$artur -> name = 'Artur';
$artur -> second_name = 'Minnigareev';
$artur -> age = 25;
$artur -> city = 'Tyimazy';
$artur -> gender = 'Male';

$rustam = new People();
$rustam -> name = 'Rustam';
$rustam -> second_name = 'Akhmedov';
$rustam -> age = 24;
$rustam -> city = 'Kogalym';
$rustam -> gender = 'Male';

class Animals {
    public $class;
    public $color;
    public $has_tail;
    public $has_beak;
    public $how_many_paws;
}
$hedgehog = new Animals();
$hedgehog -> class = 'Predator';
$hedgehog -> color = 'Brown and beige';
$hedgehog -> has_tail = 'Yes';
$hedgehog -> has_beak = 'No';
$hedgehog -> how_many_paws = 4;

$cuckoo = new Animals();
$cuckoo -> class = 'Bird';
$cuckoo -> color = 'Grey and brown';
$cuckoo -> has_beak = 'Yes';
$cuckoo -> has_beak = 'Yes';
$cuckoo -> how_many_paws = 2;

class Planets {
    public $name;
    public $mass;
    public $number_in_the_solar_system;
    public $has_sputnik;
    private $temparature;
}
$earth = new Planets();
$earth -> name = 'Earth';
$earth -> mass = 234144;
$earth -> number_in_the_solar_system = 4;
$earth -> has_sputnik = 'Yes';
