<?php

function myLoad($class) {
  include_once('classes/'.strtolower($class).'.class.php');
}
spl_autoload_register('myLoad');



$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];

$user = new RegisteredUser('newuser','regular');

function register($user) {

	if($user instanceof RegisteredUser) {

		echo "The registered user's first name is: ".$user->first_name."<br>";
		echo "The registered user's last name is: ".$user->last_name."<br>";
		echo "The registered user's email address is: ".$user->email_address."<br>";
	}

	else {
		echo "Object Not Registered";
	}
}

$user->first_name = $firstname;
$user->last_name = $lastname;
$user->email_address = $email;

register($user);









?>
