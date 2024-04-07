<?php

// Switch похож на IF ELSE по смыслу
// Удобен и более читабелен при проверке конкретных значений переменной
// Поддерживает только целочисленные и строковые выражения

function getNumberExplanation($num)
{
    switch ($num)
    {
        case 666: // $num === 666 ?
            return 'devil number';
        case 42:
            return 'answer for everything';
        case 7:
            return 'prime number';
        default: // выступает как else
            return 'just a number';

    }
}