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

foreach ($persons as $isMarry) {
    if ($isMarry['is_married']) {
        print_r($isMarry['name']);
        echo ' - А ему не очень.';
    } else {
        print_r($isMarry['name']);
        echo ' - Ему повезло))';
        echo "<br>";
    }
}