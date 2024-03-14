<?php

class SomePeople {
    public $age;
    public $name;
    public static $people = "1";
}
$tim = new SomePeople();
$tim->age = 33;
echo $tim->age;

$tom = clone $tim;
$tom->age = 22;
echo $tom->age;
echo $tim->age; // выведет 33 и не перезапишет