<?php
// Уровни доступа public, private, protected (уровни доступа между классами)
// Это уровни доступа для других классов, от которого будет extend(зится), либо в других файлах где будем вызывать этот класс

// Public доступен везде (в объекте доступен)
// Private доступен только в классе, где был объявлен (в объекте недоступен)
// Protected доступен в классе, где был объявлен и классе наследнике (в объекте недоступен)
class Plant
{
    public string $title;
    private string $color; // это означает, что он будет доступен только в классе Plant, в объекте будет недоступен
    protected string $season; // это означает, что он будет доступен в классе Plant и классе наследнике, в объекте будет недоступен
    public function __construct(string $title, string $season)
    {
        $this->title = $title;
        $this->season = $season;
    }

}

class Rose extends Plant
{
    public function someCalc(string $season)
    {
        $this->season = 'Круглый год';
    }
}

$rose1 = new Rose('Роза', 'Красный', 'Лето');
//$rose1->color; не смогу обратиться, так как он приватный

$plant1 = new Plant('Папоротник', 'Зеленый', 'Весна');
//$plant1->color; тоже не смогу обратиться, несмотря на то, что это объект от класса Plant
