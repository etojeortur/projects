<?php

echo 'Это первый файл и он содержит дату и время: ';
$time = mktime(0, 28, 23, 2, 29, 2024);
$formattedTime = date('d.m.y H:i:s', $time);
echo $formattedTime;
echo "<br>";
include "second.php";