<?php
// const name = - создает значение, которое не будет изменятся

const PI = 3.14;
echo PI . "<br>";

echo defined('PI') . "<br>"; // проверка на существование константы

/*
__LINE__;
__FILE__;
__FUNCTION__;
__CLASS__;
__METHOD__;
__DIR__;
PHP_VERSION;
PHP_EOL;
*/
echo 'Files name ' . __FILE__ . "<br>"; // как пример показ пути файла
echo __DIR__; // показ директории