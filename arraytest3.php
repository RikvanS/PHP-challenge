<?php

$array = array(
    "Steven" => "20",
    "Joost"=> "30",
    "Brian" => "25",
    "Carolus" => "45",
    "Evert-jan" => "50",
    "Gino" => "32",
    "Willy" => "41"
    );

   
    
    
    function agecalc($array) {
        $avg = array_sum($array) / count($array);
        $last = array_pop($array);
        echo "<br>De gemiddelde leeftijd van ". implode(", ",array_keys($array)). " & " .$last. " is " .$avg;
    }
    
    agecalc($array);
    

?>