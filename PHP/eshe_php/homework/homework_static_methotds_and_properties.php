<?php

abstract class Calculator
{
    public static function plus(int $a, int $b)
    {
        $result = $a + $b;
        echo "Результат сложения: $result.";
    }

    public static function minus(int $a, int $b)
    {
        $result = $a - $b;
        echo "Результат вычитания: $result.";
    }

    public static function multi(int $a, int $b)
    {
        $result = $a * $b;
        echo "Результат умножения: $result.";
    }

    public static function div(int $a, int $b)
    {
        $result = $a / $b;
        echo "Результат деления: $result.";
    }
}

Calculator::plus(22, 48);
Calculator::div(25, 5);
Calculator::minus(100, 74);
Calculator::multi(100, 10);
