<?php

class Goods
{
    public string $type;
    public string $brand;
    public string $color;
    public float $size;

    public function __construct(string $type, string $brand, string $color, int $size)
    {
        $this->type = $type;
        $this->brand = $brand;
        $this->color = $color;
        $this->size = $size;
    }
}

class Shoes extends Goods
{
    public function sayCategory()
    {
        echo 'Это категория обуви.';
    }
}

class OuterWear extends Goods
{
    public function sayCategory()
    {
        echo 'Это категория верхней одежды.';
    }
}

class UnderWear extends Goods
{
    public function sayCategory()
    {
        echo 'Это категория нижней одежды.';
    }
}

class Hats extends Goods
{
    public function sayCategory()
    {
        echo 'Это категория головных уборов.';
    }
}

$shoe1 = new Shoes('Кроссовки', 'Адидас', 'Черный и белый', 42.5);
$shoe2 = new Shoes('Туфли', 'Dr.Marten\'s', 'Черный', 43);
echo $shoe2->brand;
echo $shoe1->size;

$outwear1 = new OuterWear('Ветровка', 'Ralph Lauren', 'Бежевый', 46);
$outwear2 = new OuterWear('Пуховик', 'The North Face', 'Черный', 46);
echo $outwear1->color;

$underwear1 = new UnderWear('Трусы', 'Calvin Klein', 'Серый', 38);
$underwear2 = new UnderWear('Носки', 'Noname', 'Белый', 41);

$hat1 = new Hats('Кепка', 'H&m', 'Бежевый', 1);
$hat2 = new Hats('Повязка', 'Under Armour', 'Черный', 1);