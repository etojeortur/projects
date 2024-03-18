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
print_r($person['year_dating']);
$person3['is_married'] = true;
echo "<br>";
print_r($person3['is_married']);
$person['travel'] = 'Abkhazia';
echo "<br>";
print_r($person['travel']);
echo "<br>";
print_r($person2);

