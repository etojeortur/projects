<?php
class Organization{
    public $name;
    public $address;
    public $products = [];
    public $isWorking;
    public function __construct($name, $address, $products, $isWorking)
    {
        $this->name = $name;
        $this->address = $address;
        $this->products = $products;
        $this->isWorking = $isWorking;
    }
}
$waurma24 = new Organization('Waurma24', 'Kazan, Yamasheva street, 71', ['Mega', 'XXXL', 'Vegan'], true);
echo "Точка №1: $waurma24->name." . "<br>";
echo "Находится по адресу - $waurma24->address." . "<br>";
echo 'Ассортимент:' . "<br>";
foreach ($waurma24->products as $position1) {
    echo $position1 . '.' . "<br>";
}
echo "<hr>";

$topShaverma = new Organization('TopShaurma', 'Tuymazy, Lenina street, 24', ['PokoShaverma', 'BurgerBoom', 'Coca-Cola'], false);
echo "Точка №2: $topShaverma->name." . "<br>";
echo "Находится по адресу - $topShaverma->address." . "<br>";
echo 'Ассортимент:' . "<br>";
foreach ($topShaverma->products as $position2) {
    echo $position2 . '.' . "<br>";
}
echo "<hr>";

$kfc = new Organization('KFC', 'Kazan, Bauman street, 15', ['Burger', 'French fries', 'Bucket M'], true);
echo "Точка №3: $kfc->name." . "<br>";
echo "Находится по адресу - $kfc->address." . "<br>";
echo 'Ассортимент: ' . "<br>";
foreach ($kfc->products as $position3) {
    echo $position3 . '.' . "<br>";
}
echo "<hr>";