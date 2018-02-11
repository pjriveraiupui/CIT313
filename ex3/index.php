<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

function myLoad($class) {
  include_once('classes/'.strtolower($class).'.class.php');
}
spl_autoload_register('myLoad');

$registeredUser = new registeredUser('Regular User','1112222');


$add = admin::math(7,3);
echo "Static Method Result: $add";



?>

<!DOCTYPE html>
<html>
<head>
    <title>CIT313 - Fall 2017 - Exercise 3</title>
  </head>
  <body>
<form id="form1" name="form1" method="post" action="results.php">
<label for='firstname' >First Name: </label>
<input type='text' name='firstname' id='firstname' />
<br>
<label for='lastname' >Last Name: </label>
<input type='text' name='lastname' id='lastname' />
<br>
<label for='email' >Email Address*:</label>
<input type='text' name='email' id='email' />
<br>
<input type='submit' name='Submit' value='Submit' />

</form>

</body>
</html>
