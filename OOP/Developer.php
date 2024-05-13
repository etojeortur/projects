<?php

namespace Oop;

class Developer extends Worker // эктензимся всегда от более абстрактного класса(например воркер может быть кто угодно)
{
    protected string $position = 'you top epta';
    public function work(): void
    {
        print_r('im developing');
    }
}