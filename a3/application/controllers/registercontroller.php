<?php

class RegisterController extends Controller{

public function register() {
  $firstname = $_POST["first_name"];
  $lastname = $_POST["last_name"];
  $email = $_POST["email"];
  $password = $_POST["password"];



$sql = "INSERT INTO users (first_name, last_name, email, password) VALUES (:first_name, :last_name, :email, :password)";

  $pdoQuery = $conn->prepare($sql);

  $pdoQuery->bindValue(":first_name", $firstname, PDO::PARAM_STR);

  		$pdoQuery->bindValue(":last_name", $lastname, PDO::PARAM_STR);



  		$pdoQuery->bindValue(":email", $email, PDO::PARAM_STR);

  		$pdoQuery->bindValue(":password", $password, PDO::PARAM_STR);


  $pdoQuery->execute();
}
}
