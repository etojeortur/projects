<?php

abstract class Towers
{
    public string $name;
    public int $area;
    public int $yearConstruction;
    public int $height;
    public function __construct($name, $area, $yearConstruction, $height)
    {
        $this->name = $name;
        $this->area = $area;
        $this->yearConstruction = $yearConstruction;
        $this->height = $height;
    }
}

class ApartBuilding extends Towers
{
    public bool $isPremiumApart;
    public function __construct(string $name , int $area, int $yearConstruction, int $height, bool $isPremiumApart)
    {
        $this->isPremiumApart = $isPremiumApart;
        parent::__construct($name, $area, $yearConstruction, $height, $isPremiumApart);
    }
}

class BusinessBuilding extends Towers
{
    public function __construct($name, $area, $yearConstruction, $height)
    {
        parent::__construct($name, $area, $yearConstruction, $height);
    }
}

class GovBuildings extends Towers
{
    public function __construct($name, $area, $yearConstruction, $height)
    {
        parent::__construct($name, $area, $yearConstruction, $height);
    }
}

class MilitaryBuildings extends Towers
{
    public bool $isClassified;
    public function __construct($name, $area, $yearConstruction, $height, $isClassified)
    {
        $this->isClassified = $isClassified;
        parent::__construct($name, $area, $yearConstruction, $height);
    }
}

$apart1 = new ApartBuilding('Neva Towers', 349000, 2019, 345, true);
//echo $apart1->name . $apart1->isPremiumApart;

$business1 = new BusinessBuilding('Башня Меркурий', 174000, 2013, 340);
//echo $business1->area . "<br>" . $business1->height;

$gov1 = new GovBuildings('Главное здание МГУ', 50340, 1755, 235);
//echo $gov1->name . "<br>" . $gov1->yearConstruction;

$military1 = new MilitaryBuildings(
    'Управление Федеральной службы безопасности по Республике Татарстан',
    32000,
    2001,
    80,
    true
);
echo $military1->isClassified . "<br>" . $military1->name;

