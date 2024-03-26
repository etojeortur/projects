<?php
class Hobby {
    public $title = 'Programming';
    public $experienceMonth = 2;
    public $isGood = True;
    public function saySome()
    {
        echo 'Я учусь прогать уже 2 месяца епта и я не остановлюсь))';
    }
}
$artur = new Hobby();
echo 'My hobby is - ' . $artur->title . "\n";
$artur->saySome();

class Notebook {
    public $videocard = 'RTX 4060';
    public $displayHz = 165;
    public $isCamera = True;
    public $color = [
        'main_color' => 'Grey',
        'second_color' => 'Black'
    ];
}
$myNotebook = new Notebook();
print_r($myNotebook->color);
