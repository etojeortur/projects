<?php

// Реализуйте функцию чтобы она выводила числа в обратном порядке.
// Для этого нужно идти от верхней границы к нижней.
// То есть, счетчик должен быть инициализирован максимальным значением,
// а в теле цикла его нужно уменьшать до нижней границы.
function printNumbers(int $number)
{
    $i = 3;
    while ($i <= $number && $i > 0) {
        print_r($i);
        print_r("\n");
        $i--;
    }
    print_r('finished!');
}

printNumbers(4);


// Агрегация данных (чисел)
// Реализуйте функцию multiplyNumbersFromRange(), которая перемножает числа
// в указанном диапазоне включая границы диапазона.
function multiplyNumbersFromRange(int $start, $finish) : int
{
    $i = $start;
    $multi = 1;

    while ($i <= $finish) {
        $multi = $multi * $i;
        $i = $i + 1;
    }
    return $multi;
}


// Агрегация данных (строк)
// Реализуйте функцию joinNumbersFromRange(), которая объединяет все числа из диапазона в строку:
function joinNumbersFromRange(int $start, $finish) : string
{
    $i = $start;
    $result = '';

    while ($i <= $finish) {
        $result = "{$result}$i";
        $i++;
    }
    return $result;
}

print_r(joinNumbersFromRange(1, 9));