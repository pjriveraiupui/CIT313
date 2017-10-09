<?php
abstract class Model {
  protected $userID;
  protected $firstname;
  protected $lastname;
  protected $email;
  protected $role;


  public function __construct($user_level) {
      //to be revisted later
  }

  public function __set($name,$value) {

  }

  public function __get($name) {

  }

  public function __destruct() {

  }
}



 ?>
