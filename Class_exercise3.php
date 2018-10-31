<?php

    class Car {
    public $comp;
    public $color = 'beige';
    public $hasSunRoof = true;

    public function hello() {
        return "beep I am a <i>" .$this-> comp . "</i>, and I am <i>" . $this->color ."</i>";
    }
}

$bmw = new Car();
$mercedes = new Car();

$bmw -> comp = "BMW";
$bmw -> color = "Blue";

$mercedes -> comp = "Mercedes Benz";
$mercedes -> color = "green";

echo $bmw -> hello();
echo "<br>";
echo $mercedes -> hello();
?>