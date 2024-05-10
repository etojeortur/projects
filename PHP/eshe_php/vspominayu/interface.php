<?php

class Plant{
    public string $title;
    public string $color;
    public string $season;
    public function __construct(string $title, string $color, string $season)
    {
        $this->title = $title;
        $this->color = $color;
        $this->season = $season;
    }
    private function someCalc()
    {

    }
}


class Flower extends Plant
{

}

$rose = new Flower('Rose', 'White', 'Spring');
echo $rose->title;
