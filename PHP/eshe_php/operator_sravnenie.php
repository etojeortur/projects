<?php
$persons = [
    [
        'name' => 'Evelina',
        'age' => 19,
        'city' => 'Kazan',
        'hobby' => 'painting',
        'is_married' => false,
        'year_dating' => 2022,
    ],
    [
        'name' => 'Rustam',
        'age' => 24,
        'city' => 'Kazan',
        'hobby' => 'playing games',
        'is_married' => false,
        'year_dating' => 2012,
        'cars' => ['audi', 'mercedes', 'vaz-2107'],
    ],
    [
        'name' => 'Artur',
        'age' => 25,
        'city' => 'Tuymazy',
        'hobby' => 'drinking alcohol',
        'is_married' => false,
        'year_dating' => 2015,
    ],
    [
        'name' => 'Sergey',
        'age' => 26,
        'city' => 'Kazan',
        'hobby' => 'making game trailers',
        'is_married' => false,
        'year_dating' => 2021,
    ],
    [
        'name' => 'Oleg',
        'age' => 25,
        'city' => 'Moscow',
        'hobby' => 'fishing',
        'is_married' => true,
        'year_dating' => 2025,
    ]
];

// == равно
// === строгое сравнение
// && и
// || или
$some = 14;
$age = 25;

if ($some >= 14 || $age == 25) {
    echo 'Yes.';
} else {
    echo 'No.';
}