<?php
// Функция это внесение какого-то своего алгоритма грубо говоря в "переменную"
function sayHello() { //сигнатура функции
    echo 'Hello '; // это и все ниже тело функции
    $name = 'Artur';
    echo $name;
}
sayHello();

// strlen(), rand(min, max)
//strlen считает кол-во символов в строке
$company1 = 'Apple';
$company2 = 'Samsung';

$strCount = strlen($company1 . $company2);
print_r($strCount);

// rand генерирует случайное число от МИН до МАКС
$myRand = rand(1, 6);
if ($myRand == 3) {
    print_r('Ай бля маслину поймал!');
} else {
    print_r('Повезло, хаха)))');
}