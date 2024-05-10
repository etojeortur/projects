<?php

abstract class MyCalculator
{
    public static function sum($a, $b)
    {
        echo $a + $b;
    }
    public static function minus($a, $b)
    {
        echo $a - $b;
    }
    public static function multi($a, $b)
    {
        echo $a * $b;
    }
    public static function div($a, $b)
    {
        echo $a / $b;
    }
    public static function exponent($a, $b)
    {
        echo $a ** $b;
    }
}

MyCalculator::multi(4, 6);
MyCalculator::exponent(2,2);
