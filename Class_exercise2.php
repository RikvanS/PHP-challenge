<?php
    //Your practice code
    
    class User {
        public $firstName;
        public $lastName;
        
        public function hello(){
        return "Hello";
    }
    }

    $user1 = new User();
    $user1 -> firstName = "John";
    $user1 -> lastName = "Doe";

    //echo $user1->firstName . " " .$user1->lastName;

    $hello = $user1->hello();
    echo $hello . ", " . $user1->firstName . " " .$user1->lastName;

    $user2 = new User();
    $user2 -> firstName = "Jane";
    $user2 -> lastName = "Doe";

    $hello = $user2->hello();
    echo "<br>";
    echo $hello . ", " .$user2->firstName . " " .$user2->lastName;

?>