<?php

$var = 'kyk kyky';
$num = 1337;

// isset(), empty()
//echo isset($var); // проверка на существование переменной
$status = isset($var, $num);
echo $status;

// если нет переменной, пустая строка, 0, null, false = true
$status2 = empty($num); // если нет переменной = true
echo $status2;

// Проверка существования переменной
$str = '';
if (isset($str)) {
    echo "Переменная сущетсвует" . "<br>";
}

if (empty($str)) {
    echo 'Переменная пустая' . "<br>";
}

// Определяем тип переменной
//'boolean', 'integer', 'double', 'string', 'array', 'object', 'resource', 'null', 'unknown type'
$float = 1.42;
echo is_int($num); // проверка на конкретный тип переменной
echo gettype($float);