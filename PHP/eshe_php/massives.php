<?php
// можно задать ключ => вместо обычной индексации 0, 1, 2
$person = [
    'name' => 'Artur',
    'age' => 25,
    'hobby' => 'programming',
    'is_married' => true, // булевые значения принято называть через is
    'pet' => 'cat',
    'pet_name' => 'barsik'  // в массивах не используется верблюжья нотация abCd
];
print_r($person['name']); // через echo массив не отобразится, для быстрого и простого вывода можно использовать print_r, для более подробного var_dump
// добавить элемент в массив можно таким образом, просто указав его сразу в скобках
$person['is_working'] = true;
print_r($person['is_working']);
// удалить элемент из массива можно таким образом
unset($person['is_working']);
print_r($person);
// отредактировать элемент можно таким образом
$person['hobby'] = 'gym';
print_r($person);
