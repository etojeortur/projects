<?php

// Время
$time = mktime(0, 6, 30, 2, 29, 2024); // выставил дату и время
$formatTime = date('d.m.y H:i', $time); // отформатировал дату и время в день.месяц.год Часы:минуты
echo "Форматированная дата и время: $formatTime";

echo "<br>"; echo "<br>";

// Генерация случайных чисел
// mt_rand(0, 1000); первое число min, второе max
$random = mt_rand(0, 1000);
echo "Генерация случайных чисел от 0 до 1000: $random";
echo "<hr>";

// Подключение файлов

// оно в файлике first.php, second.php, third.php