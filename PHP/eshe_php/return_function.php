<?php
function getSum($a, $b) // если функция возвращаемая, то ее надо называть именно так, например get
{
    $sum = $a + $b;
    return $sum;
}
//getSum(10, 15);
$result = getSum(10, 15); // когда мы что-то возвращаем в функции, то она превращается в переменную, в которой сохранен результат с return
echo $result;