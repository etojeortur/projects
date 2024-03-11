<?php

class SomePeople {
    public $age;
    public $name;
    public static $people = 1; // статическая переменная класса, на нее можно ссылать без создания экземпляра класса
}
$artur = new SomePeople();
$artur -> age = 25;
echo $artur -> age . "<br>"; // Здесь будет = 25 лет

$evelina = $artur; // тут мы сровняли возраст эвелина и артура = 25
$artur -> age = 19; // а тут мы сменили возраст артуру и тем самым его перезаписали
echo $evelina -> age . "<br>"; // эвелине уже будет 19, так как она лишь ссылается на артура
//echo $artur -> age; // артуру тут уже будет 19
//echo SomePeople::$people; // вывели эту переменную

