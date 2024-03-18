<?php
$hour = 1;
$time = '';
if ($hour > 23 | $hour < 0) {
    echo 'Ошибка: Введи время от 00 до 23 часов.';
}elseif ($hour >= 00 & $hour <= 10 & $hour < 24 & $hour < 24 & $hour > -1) {
    $time = 0;
}elseif ($hour >= 11 & $hour <= 15 & $hour < 24 & $hour > -1) {
    $time = 1;
}elseif ($hour >= 16 & $hour <= 23 & $hour < 24 & $hour > -1) {
    $time = 1;
}if ($time == 1) {
    echo 'Еще рано спать';
}elseif ($time == 0) {
    echo 'Бегом спать';
}