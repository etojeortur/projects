<?php
ini_set('error_reporting', E_ALL);
// Целые числа
$num = 1234; // десятичное число
$num = +1234; // десятичное число
$num = -342; // отрицательное число
$num = 0534; // восмиричное число
$num = 0x1A; // шестнадцатиричное число
// Вещественные числа
$var = 1.123;
// Логический тип (boolean)
true;
false;
// Строчный тип
$str = "Hello, world - $num" ; // двойные кавычки ипсользуются при совершении действий
$str1 = "Hello, world - $num";
$str2 = 'Some text - $num'; // одинарные кавычки используются для обычного текста
// Экранирование (обраатный слэш)
$str3 = 'Some text - \'34\''; // его нужно ставить перед символом, который нужно экранировать
// помогает предотвратить выполнение каких либо логических действий
// например, добавление символа \ перед ' кавычками позволяет интерпретировать их в качестве части текста, а не в качестве обозначения окончания строки

// Специальный тип NULL (пустой)
$var = null;
// unset($var); комманда unset уничтожает переменную
echo $var;
