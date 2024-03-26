<?php
function getDiv($a, $b)
{
    $div = $a / $b;
    return $div;
}

$result1 = getDiv(35, 5);
echo $result1 . "<br>";

function getMinus($a, $b)
{
    $minus = $a - $b;
    return $minus;
}
$result2 = getMinus(1488, 488);
echo $result2 . "<br>";

function getMulti($a, $b)
{
    $multi = $a * $b;
    return $multi;
}
$result3 = getMulti(25, 5);
echo $result3 . "<br>";

function getSum($a, $b)
{
    $sum = $a + $b;
    return $sum;
}

$result4 = getSum(1337, 113);
echo $result4;