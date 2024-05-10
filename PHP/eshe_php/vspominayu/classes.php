<?php

class Goods {
    public string $brand;
    public string $type;
    public int $size;
    public float $price;
    public bool $inStock;
    public function __construct($brand, $type, $size, $price, $inStock)
    {
        $this->brand = $brand;
        $this->type = $type;
        $this->price = $price;
        $this->size = $size;
        $this->inStock = $inStock;
    }
    public function getAllInfo()
    {
        $availability = null;
        if ($this->inStock === true){
            $availability = 'Есть в наличии';
        } else{
            $availability = 'Нет в наличии';
        }
        return "Бренд: $this->brand. Тип: $this->type. Цена: $this->price. Размер: $this->size. В наличии: $availability.";
    }
}

$stock1 = new Goods('Ralph Lauren', 'Jacket', 48, 499.99, true);
print_r($stock1->getAllInfo());
