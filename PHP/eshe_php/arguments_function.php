<?php
// Аргументы указываются в скобках
function makeSum($x, $y) // тут $x и $y выступают как плейсхолдеры
{
    $sum = $x + $y;
    echo $sum;
}
makeSum(10, 32); // здесь уже можно указать что будет в $x и $y
