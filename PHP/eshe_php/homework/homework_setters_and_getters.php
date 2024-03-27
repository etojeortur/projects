<?php
class Animal {
    public $type = 'Cat';
    public $name = 'Barsik';
    public $age = 5;
    public function setType($animalType)
    {
        $this->type = $animalType;
    }

    public  function setName($animalName)
    {
        $this->name = $animalName;
    }

    public function getAge()
    {
        return $this->getAge();
    }
}

$pet1 = new Animal();
echo "Мое первое домшнее животное: $pet1->type по кличке $pet1->name.";
echo "<br>";

$pet2 = new Animal();
$pet2->setType('Dog');
$pet2->setName('Defa');
echo "Мое второе животное: $pet2->type по кличке $pet2->name.";
echo "<br>";

$pet3 = new Animal();
$pet3->setType('Snake');
$pet3->setName('Charizard');
echo "Мое третье животное: $pet3->type по кличке $pet3->name и ей уже $pet3->age лет.";
echo "<br>";

$pet4 = new Animal;
$pet4->setType('Fish');
$pet4->setName('Midas');
echo "Мое четвертое домашнее животное: $pet4->type по кличке $pet4->name.";
echo "<br>" . "<hr>";

if ($pet4->age == 5) {
    echo "У моего домашнего животного $pet4->type по кличке $pet4->name сегодня юбилей!";
} else {
    echo 'Еще не юбилей...';
}