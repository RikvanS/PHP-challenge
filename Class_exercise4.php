<?php

class User {
 
  // The class properties.
  public $firstName;
 
  public $lastName;
 
  // A method that says hello to the user.
  public function hello()
  {
    return "hello" . $this -> firstName;
  }
}

$user1 = new User();

$user1 -> firstName = "Jonnie";
$user1 -> lastName = "Roe";

echo $user1 ->hello()

?>