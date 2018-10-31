<?php

class User {
 
 // The class properties.
 public $firstName;

 // A method that says hello to the user $firstName.
 // The user $firstName property can be approached with the $this keyword.
 public function hello()  {
   echo "hello, " .  $this -> firstName;
   return $this;
 }

 public function register() {
echo ">>registered";
return $this;
 }

 public function mail() {
     echo "email sent";
 }
}


$user1 = new User();
$user1->firstName = "Jane";

$user1 -> hello() -> register() -> mail();
?>