<?php
$clothes = [
    [
        'brand' => 'Adidas',
        'type' => 't-shirt',
        'size' => 'M',
        'color' => ['black', 'white'],
        'price' => 199,
        'in_stock' => false,
    ],
    [
        'brand' => 'Under Armour',
        'type' => 'pants',
        'size' => 'S',
        'color' => 'red',
        'price' => 149,
        'in_stock' => true,
    ],
    [
        'brand' => 'Ralph Lauren',
        'type' => 'jacket',
        'size' => 'M',
        'color' => 'beige',
        'in_stock' => true,
        'price' => 399,
    ]
];
foreach ($clothes as $item) {
    print_r($item['brand']);
    echo ': ';
    print_r($item['size']);
    echo ' [';
    echo 'Price - ';
    print_r($item['price']);
    echo '];' . "<br>";
}

//foreach ($clothes as $stock) {
//    if ($stock['in_stock']) {
//        print_r('Товар: '. $stock['brand']);
//        print_r('(' . $stock['type'] . ')' );
//        echo ' - ' . 'Сейчас в наличии.' . "<br>";
//
//    } else {
//        print_r( 'Товар: '. $stock['brand']);
//        print_r('('. $stock['type'] . ')');
//        echo ' - ' . 'Сейчас нет в наличии. ' .  'Подписаться на новости?' . "<br>";
//    }
//}