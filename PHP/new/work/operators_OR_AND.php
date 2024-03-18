<?php
$flag1 = false;
$flag2 = false;

/*if ($flag1 && $flag2) {
    echo "<p>Оба флага возвращают True.</p>";
}elseif ($flag1 || $flag2) {
    echo "<p>Один флаг возвращает True.</p>";
}else{
    echo 'Ни один флаг не возвращает True.';
}
*/

// x ? y : z
// выражение1 ? выражение2 : выражение3
// если x = true, то выполнится y, если x = false, то выполнится только z
$x = -13;
$x = $x > 0 ? $x = 11 : $x;
echo $x . "<br>";


if (file_get_contents("homeworks/text.txt")) {
    $content = file_get_contents("homeworks/text.txt");
    echo $content;
}