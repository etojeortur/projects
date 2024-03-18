<?php

// Инкремент это ++, т.е увеличивает число на 1; Декремент это --, т.е уменьшает на 1
$var1 = 2;
$var2 = 2;
// ++$var это префиксный, т.е увеличит число и выведет уже увеличенное число
echo ++$var1 . "<hr>"; // сразу увидим 3

// $var++ это постфиксный, т.е сначала выведет число, а потом уже его увеличит
echo $var2++ . "<br>"; // сначала мы увидим 2
echo $var2 . "<hr>"; // тут уже увидим 3

// также инкремент работает и на строках
$abc1 = 'bbb';
$abc2 = 'zz';
echo ++$abc1 . "<br>"; // увеличит последнюю букву на 1 дальше, т.е будет bbc
echo ++$abc2; // если увеличить все последние буквы алфавита, как 'zz', то он увеличит все буквы на 1 и увеличит их кол-во
echo ++$abc2;