<?php
function toKiss($name1, $gender1, $name2, $gender2)
{
    if ($gender1 == 'Female' || $gender1 == 'female' && $gender2 == 'Male' || $gender2 == 'male') {
        $kiss = $name1 . ' целует ' . $name2 . ' - а он и не против)))';
        echo $kiss;
    } elseif ($gender1 == 'Male' || $gender1 == 'male' && $gender2 == 'Female' || $gender2 == 'female') {
        $kiss = $name1 . ' целует ' . $name2 . ' - а она и не против!';
        echo $kiss;
    } else {
        echo 'Что ты написал, дурень?))';
    }

}
toKiss('Артур', 'male', 'Эвелина', 'Female');

function doStrongDiv($num1, $num2)
{
    $div = $num1 % $num2;
    echo $div;
}
doStrongDiv(100, 52);
