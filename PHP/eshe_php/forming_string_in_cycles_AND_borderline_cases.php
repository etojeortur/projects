<?php

/* Реализуйте функцию mysubstr(), которая извлекает из строки подстроку указанной длины.
   Она принимает на вход два аргумента (строку и длину)
   и возвращает подстроку начиная с первого символа:
*/

function mySubstr($str, $len)
{
    $i = 0;
    $result = '';

    while ($i < strlen($str) && $i < $len) {
        $text = $str[$i];
        $result = "$result{$text}";
        $i++;
    }
    return $result;
}

//print_r(mySubstr('If I look back I am lost', 7));


/*Реализуйте функцию-предикат isArgumentsForSubstrCorrect, которая принимает три аргумента:
  1)строку
  2)индекс, с которого начинать извлечение
  3)длину извлекаемой подстроки
Функция возвращает false, если хотя бы одно из условий истинно:
  1)Отрицательная длина извлекаемой подстроки
  2)Отрицательный заданный индекс
  3)Заданный индекс выходит за границу всей строки
  4)Длина подстроки в сумме с заданным индексом выходит за границу всей строки
*/
function isArgumentsForSubstCorrect($str, $index, $len)
{
    if ($len < 0) {
        return false;
    } elseif ($index < 0) {
        return false;
    } elseif ($index > strlen($str) - 1) {
        return false;
    } elseif ($len + $index > strlen($str)) {
        return false;
    } else {
        return true;
    }
}

//var_dump(isArgumentsForSubstCorrect('Sansa Stark', 10, 1));


