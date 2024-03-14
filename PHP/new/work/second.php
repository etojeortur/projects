<?php
echo 'Это второй файл и он содерижит генератор чисел от 0 до 10000: ';
$randomNum = mt_rand(0, 10000);
echo $randomNum;
echo "<br>";
include "third.php";