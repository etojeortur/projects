<?php
class Animal {
    public $type = 'Cat';
    public $name = 'Barsik';
    public $age = 6;
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