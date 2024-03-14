<?php
// 1
$hi = 'Привет ';
$name = 'Артур, ';
$how = 'как ты?';
$hi .= $name .= $how;
echo $hi . "<br>";
// 2
$num1 = 11;
$num2 = 22;
$num1 .= $num2;
echo $num1 . "<br>";
// 3
$first = 'Скоро ';
$second = 'я ';
$third = 'буду ';
$fourth = 'знать ';
$fifth = 'PHP!';
echo $first, $second, $third, $fourth, $fifth . "<br>";
// 4
echo 4 + 13 . "<br>";
echo 35 - 5 . "<br>";
echo (25 * 5) . "<br>";
echo 24 / 6 . "<br>";
echo 216 % 2 . "<br>";
// 5
$number = 153;
if ($number % 2) {
    echo "Число в переменной: $number нечетное";
}else {
    echo "Число в переменной: $number четное";
}