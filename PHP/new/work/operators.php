<?php
// Переменные

// Конкатенация или объединениие строк
$str1 = 'Хорошо, что я учу ';
$str2 = 'PHP.';
$num = 123;
$num2 = 321;

$str = $str1 . $str2;
$nums = $num . $num2; // конкатенация сложит цифры как строку (123321)
//echo $str . "<br>";
//echo $nums . "<br>";

$num3 = 123;
$num4 = 321;
$num3 = $num3 . $num4; // 123321
//$num3 .= $num4; // сокращенный вариант записи верхнего выражения
//echo $num3;
//echo $num, $num2, $num3, $num4; // вывод нескольких переменных

// Арифметические операторы
//echo (2 + 2) * (21 - 19);
//echo (int)(7 / 2); // округление
//echo intval(7 / 2); то же самое что и выше
//echo 125 % 2; // деление с остатком (по модулю), обычно используют для определения четное число или нет

$number = 25354;
if ($number % 2) {
    echo "Число в переменной: $number четное"; // в одинарных кавычках переменные не считываются и выводятся как текст
 } else {
    echo "Число в переменной: $number нечетное";
}

