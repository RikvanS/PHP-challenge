<?php

//Simple class oefening 29/10

class TestClass {
    public $var = 'Een of andere waarde in een string';

    public function displayVar() {
        echo $this->var;
    }
}

// eerst class omzetten naar object voor ik het kan aanroepen
$testClass = new testClass;
$testClass->displayVar(); 

class TestTwee {
    public $name;
    private $password;

    function __construct($name, $password) {
        $this->name = $name;
        $this->password = $password;
    }

    public function Name() {
        echo "<br>Username is $this->name and password is $this->password";
    }
}

$TestTwee = new TestTwee("Rik", "password");
$TestTwee->Name();

?>