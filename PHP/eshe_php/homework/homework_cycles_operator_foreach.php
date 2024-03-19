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

foreach ($person as $key => $element) {
    echo $key . ': ';
    echo $element . "\n";
}
echo '--------------------' . "\n";
foreach ($person2 as $key2 => $element2) {
    echo $key2 . ': ';
    echo $element2 . "\n";
}
echo '--------------------' . "\n";
foreach ($person3 as $key3 => $element3) {
    echo $key3 . ': ';
    echo $element3 . "\n";
}
echo '--------------------' . "\n";
foreach ($person4 as $key4 => $element4) {
    echo $key4 . ': ';
    echo $element4 . "\n";
}