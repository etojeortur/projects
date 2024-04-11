<?php

// (1)Реализуйте функцию чтобы она выводила числа в обратном порядке.
// Для этого нужно идти от верхней границы к нижней.
// То есть, счетчик должен быть инициализирован максимальным значением,
// а в теле цикла его нужно уменьшать до нижней границы.
function printNumbers(int $number)
{
    $i = 3; // сначала инициализируется счетчик

    while ($i <= $number && $i > 0) {

        print_r($i);
        print_r("\n");
        $i--;
    }
    print_r('finished!');
}

printNumbers(4);


// Агрегация данных (чисел) \\

// (2)Реализуйте функцию multiplyNumbersFromRange(), которая перемножает числа
// в указанном диапазоне включая границы диапазона.
function multiplyNumbersFromRange(int $start, $finish) : int
{
    $i = $start; // счетчик равен старту
    $multi = 1; // нейтральный знак для умножения

    while ($i <= $finish) {
        $multi = $multi * $i;
        $i = $i + 1;
    }
    return $multi;
}


// Агрегация данных (строк) \\

// (3)Реализуйте функцию joinNumbersFromRange(), которая объединяет все числа из диапазона в строку:
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


// (4)Реализуйте функцию printReversedWordBySymbol(), которая печатает переданное слово посимвольно,
// в обратном порядке.
function printReversedWordBySymbol(string $string)
{
    $i = strlen($string) - 1; // инициализировали счетчку последний индекс через -1

    while ($i >= 0) {
        print_r($string[$i] . "\n");
        $i--;
    }
}


// Уловие внутри цикла \\

// (5)Реализуйте функцию функцию, которая считает сколько раз входит буква в предложение,
// так чтобы регистр букв был не важен
function countChars($str, $char)
{
    $i = 0;
    $count = 0;
    $str = strtolower($str); // прировнялили строку к ниж регистру
    $char = strtolower($char); // прировняли искомый символ к ниж регистру

    while ($i < strlen($str)) {
        if ($str[$i] === $char) {
            $count++; // увеличивается только при истине условия
        }
        $i++; // увиличивается в любом случае
    }
    return $count;
}

