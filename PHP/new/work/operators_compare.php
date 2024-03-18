<?php

$num1 = 123;
$num2 = 321;
$num3 = 123;
$num4 = '123';
$str1 = 'some text';
$str2 = 's0me text';

//var_dump($num1 > $num2); // false
//var_dump($num1 < $num2); // true
//var_dump($num1 == $num3); // оператор равенства
//var_dump($num1 != $num2); // оператор неравенства
var_dump($num1 === $num4); // оператор строгого равенства, будет сравнивать типы данных
var_dump(($num1 !== $num4)); // оператор строгого неравенства, будет сравнивать типы данных