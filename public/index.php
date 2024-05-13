<?php

require_once ('../vendor/autoload.php');

$worker = new \Oop\Worker;
$developer = new \Oop\Developer;

$developer->setPosition('Developer');
var_dump($developer->getPosition());