<?php

function myLoad($class) {
  include_once('classes/'.strtolower($class).'.class.php');
}
spl_autoload_register('myLoad');


$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];



$test = new registeredUser('newuser','regular');
if($test instanceof registeredUser) {
  echo "First Name: ". $firstname . "<br>";
  echo "Last Name: ". $lastname . "<br>";
  echo "Email: ". $email . "<br>";
}
else {
  echo "Error: Object did not pass test";
}
?>
