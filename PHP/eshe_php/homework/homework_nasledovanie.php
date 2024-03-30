<?php
class Worker
{
    public $name;
    public $age;
    public $job;
    public function sayHello()
    {
        echo 'Hello! ';
    }
}

class Hostel extends Worker
{
    public function saySome()
    {
        echo 'I\'m Hostel. How i can help you?' . "<br>";
    }
    public function makeBr()
    {
        echo "<br>";
    }
}
$hostel1 = new Hostel();
$hostel1->sayHello();
$hostel1->saySome();

class Security extends Worker
{
    public function saySome()
    {
        echo 'I\'m Security. Can i see your documents?' , "<br>";
    }
}
$security1 = new Security();
$security1->sayHello() . $security1->saySome();

class TechSupport extends Worker
{
    public function saySome()
    {
        echo 'I\'m Tech Support. What is your question?' . "<br>";
    }
}
$techSupport1 = new TechSupport();
$techSupport1->sayHello() . $techSupport1->saySome();

class Expeditor extends Worker
{
    public function saySome()
    {
        echo 'I\'m Expeditor. Let\'s go to our office.';
    }
}
$expeditor1 = new Expeditor();
$expeditor1->sayHello() . $expeditor1->saySome();