<?php
$person = [
    'name' => 'Evelina',
    'age' => 19,
    'city' => 'Kazan',
    'hobby' => 'painting',
    'is_married' => false,
    'year_dating' => 2022,
];
$person2 = [
    'name' => 'Rustam',
    'age' => 24,
    'city' => 'Kazan',
    'hobby' => 'playing games',
    'is_married' => false,
    'year_dating' => 2012,
];
$person3 = [
    'name' => 'Artur',
    'age' => 25,
    'city' => 'Tuymazy',
    'hobby' => 'drinking alcohol',
    'is_married' => false,
    'year_dating' => 2015,
];
$person4 = [
    'name' => 'Sergey',
    'age' => 26,
    'city' => 'Kazan',
    'hobby' => 'making game trailers',
    'is_married' => false,
    'year_dating' => 2021,
];

// foreach работает только с массивами и объектами
foreach ($person as $key => $item) { // сначала идет массив, $key с => $item используется как создание ключа и элемента в цикле
    echo $key . ': ';
    echo $item . "\n";
}