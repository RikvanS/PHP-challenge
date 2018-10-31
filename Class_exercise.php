<?php

class Car {
    public $comp;
    public $color = 'beige';
    public $hasSunRoof = true;

    public function hello() {
        return "beep";
    }
}

$bmw = new Car();
$mercedes = new Car();

$bmw -> color = "blue";
$bmw -> comp = "BWM";
$mercedes -> comp = "Mercedes Benz";


echo $mercedes -> color;
echo $mercedes -> comp;

echo $mercedes -> hello();
?>