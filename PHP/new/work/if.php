<?php
// Уловный оператор if

$flag = false;
if ($flag) {
    echo 'Переменная flag имеет значение true.';
}else {
    echo 'Переменная flag имеет значсение false.';
}

$bacon = 0;
if ($bacon == 1) {
    echo 'Нужно купить еще бекона.';
}elseif ($bacon == 2) {
    echo 'У меня достаточно бекона.';
}elseif ($bacon >= 3) {
    echo 'У меня слишком много бекона, нужно съесть)))';
}else {
    echo 'У меня совсем нет бекона:( Бегом в самокат!!!';
}


