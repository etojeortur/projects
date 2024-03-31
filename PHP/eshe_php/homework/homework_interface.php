<?php

interface Airplanes
{
    public function setName(string $planeName);

    public function setDestination(string $destinationCity1, string $destinationCity2);

    public function setDate(string $date);

    public function isAvailable(bool $isAvailable);
}

class Aeroflot implements Airplanes
{
    public function setName(string $planeName)
    {
        echo "Название самолета: $planeName.";
    }

    public function setDestination(string $destinationCity1, string $destinationCity2)
    {
        echo "Направление $destinationCity1 -> $destinationCity2.";
    }

    public function setDate(string $date)
    {
        echo "Дата вылета: $date.";
    }

    public function isAvailable(bool $isAvailable)
    {
        if ($isAvailable == 1) {
            echo "Доступна покупка билета: Да.";
        } else {
            echo "Доступна покупка билета: Нет.";
        }
    }
}

//$planeAeroflot1 = new Aeroflot();
//$planeAeroflot1->setDestination('Казань', 'Москва');
//$planeAeroflot1->setName('Боинг-777');

class Pobeda implements Airplanes
{
    public function setName(string $planeName)
    {
        echo "Название самолета: $planeName.";
    }

    public function setDestination(string $destinationCity1, string $destinationCity2)
    {
        echo "Направление $destinationCity1 -> $destinationCity2.";
    }

    public function setDate(string $date)
    {
        echo "Дата вылета: $date.";
    }

    public function isAvailable(bool $isAvailable)
    {
        if ($isAvailable == 1) {
            echo "Доступна покупка билета: Да.";
        } else {
            echo "Доступна покупка билета: Нет.";
        }
    }
}

//$planePobeda1 = new Pobeda();
//$planePobeda1->setDate('13.07.2024');
//$planePobeda1->isAvailable(false);