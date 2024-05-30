<?php

require_once ('../vendor/autoload.php');


$developer = new \Oop\Developer();
$developer->setHours([5, 6, 10]);

$salary = \Oop\Salary::count($developer->getHours()); // статические методы вызываются через двойное двоеточие
var_dump($salary);
var_dump(\Oop\Salary::$totalHours);
\Oop\Salary::$totalHours += 100;
var_dump(\Oop\Salary::$totalHours);


