<?php

namespace Oop;

class Developer extends Worker // эктензимся всегда от более абстрактного класса(например воркер может быть кто угодно)
    // наследование должно быть чем-то смотивировано(например, что-то переопределить, добавить еще свойств), иначе для чего?
{
    use HasRest; // трейты всегда подключаются в самом верху

   protected string $position = 'you top epta';

    public function work()
    {
        print_r('I\'m developing');
    }
}
