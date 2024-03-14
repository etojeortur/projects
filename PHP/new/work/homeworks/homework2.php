<?php
// 3.
$num1 = 1.5;
$num2 = 2.14;
$num3 = 8.643;
$num4 = 19.834;
$num5 = 105.149;
$num6 = 454.9992;
$num1 = round($num1, 0, PHP_ROUND_HALF_UP);
$num2 = round($num2, 0, PHP_ROUND_HALF_DOWN);
$num3 = round($num3, 0, PHP_ROUND_HALF_ODD);
$num4 = round($num4, 0, PHP_ROUND_HALF_EVEN);
$num5 = ceil($num5);
$num6 = floor($num6);

echo $num1;
echo "<br>";
echo $num2;
echo "<br>";
echo $num3;
echo $num4;
echo "<br>";
echo $num5;
echo "<br>";
echo $num6;
echo "<br>";

// 4.
$num7 = 42.43752;
$num7 = round($num7, 2,PHP_ROUND_HALF_UP);
echo $num7;
echo "<br>";

// 5.
echo " \"Я ежик и я уже 2 года очень люблю кукушку\"";
