<?php

class Slime {
    public $type = 'スライム';
    public $hp = 10;
    public $power = 3;

    function attack($character_name) {
        print $this->type . 'が' . $character_name . 'を攻撃して' . $this->power . 'ポイントのダメージを与えた！' . PHP_EOL;
    }
}

//$slime_A = new Slime();

//$slime_A->attack('主人公');

//print_r($slime_A);
//$hero = new Hero();
//$slime_A = new Slime('A');

//$slime_A->attack($hero);
//$hero->attack($slime_A);

$slime_A = new Slime();
$slime_B = new Slime();
$slime_C = new Slime();

$slime_A->attack('主人公');
$slime_B->attack('主人公');
$slime_C->attack('主人公');