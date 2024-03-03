<?php
// 1.
$empty = '';
echo isset($empty) . "<br>";
// 2.
$a = 1;
$b = 2;
$c = 3;
echo isset($a, $b,$c) . "<br>";
// 3.
$int = 1;
$double = 1.3;
$boolean = true;
$null = null;
$str = 'string';
$numeric = '42';
$array = [1, 2, 3];
echo is_int($int) . "<br>";
echo is_double($double) . "<br>";
echo is_bool($boolean) . "<br>";
echo is_null($null) . "<br>";
echo is_string($str) . "<br>";
echo is_numeric($numeric) . "<br>";
echo is_array($array) . "<br>";
unset($double, $null, $array);
echo gettype($double);
echo gettype($null);
echo gettype($array);