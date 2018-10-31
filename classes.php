<?php

class Customer {

public $name;
protected $address;
private $email;

function __construct($name, $address, $email) {
    $this->name = $name;
    $this->address = $address;
    $this->email = $email;
}

public function talk() {
    
    echo "I am $this->name, live at $this->address and you can reach me at $this->email<br>";
}

protected function walk() {
    return "Protected function";
}
private function run() {
    return "Private function";
}
}

$customer = new Customer("Rik", "Grunostraat 22", "denjotun@gmail.com");
$customer->talk();

class SuperCustomer extends Customer {
    public function talk() {
        echo parent::talk() . "SuperCustomer subclass example";
    }
}

$SuperCustomer = new SuperCustomer("Ivan", "Grunostraat 18", "email@email.com");
$SuperCustomer->talk();
?>