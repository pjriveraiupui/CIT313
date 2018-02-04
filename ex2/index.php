<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

include_once("classes/users.class.php");
include_once("classes/registeredUser.class.php");
include_once("classes/admin.class.php");

$registeredUser = new registeredUser('Regular User','1112222');
$admin = new admin('Administrator', '1234567');


$registeredUser->first_name = "Patrick";
$registeredUser->last_name = "Rivera";
$registeredUser->email_address = "pjrivera@iupui.edu";

echo "User Level: " . $registeredUser->user_level . "<br>";
echo "Registered User ID: " . $registeredUser->user_id . "<br>";
echo "Registered User Type: " . $registeredUser->user_type . "<br>";
echo "Registered First Name: " . $registeredUser->first_name . "<br>";
echo "Registered Last Name: " . $registeredUser->last_name . "<br>";
echo "Registered Email: " . $registeredUser->email_address . "<br> <br>";


$admin->first_name = "Admin";
$admin->last_name = "Administrator";
$admin->email_address = "admin@iupui.edu";

echo "User Level: " . $admin->user_level . "<br>";
echo "Admin User ID: " . $admin->user_id . "<br>";
echo "Admin User Type: " . $admin->user_type . "<br>";
echo "Admin First Name: " . $admin->first_name . "<br>";
echo "Admin Last Name: " . $admin->last_name . "<br>";
echo "Admin Email: " . $admin->email_address . "<br>";


?>

<!DOCTYPE html>
<html>
<head>
    <title>CIT313 - Spring 2018 - Intro to Object Oriented Programming</title>
  </head>
  <body>
    <?php


     ?>

</body>
</html>
