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

// foreach(переводится как "для каждого" работает только с массивами и объектами
foreach ($person as $key => $item) { // говорит как: представь массив как некое значение($key) и его элементы как($item)
    echo $key . ': ';
    echo $item . "\n";
}