<?php
// 1
/*$num1 = 666;
$num2 = "666";
$num3 = 777;

$str1 = 'abc';
$str2 = "abc";

var_dump($num1 == $num2);
var_dump($num1 === $num2);
var_dump($num1 !== $num3);
var_dump($num1 >= $num3);
var_dump($num1 <= $num3);
var_dump($num1 != $num2); // будет false, так как num1 равен num2, так как тут нестрогое сравнение

var_dump($str1 == $str2);
*/
// 2
$num = 24;
$sum = $num * $num;
echo $sum;

// 3
if ($num % 2) {
    echo 'Число нечетное';
} if ($num % 2 == 0) {
    echo 'Число четное';
}