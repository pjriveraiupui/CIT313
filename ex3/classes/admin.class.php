<?php
class admin extends users {


  public function __construct($user_level, $user_id) {
    parent::__construct($user_level);
    $this->user_type = "2";
    $this->user_id = $user_id;
  }

  public function __set($name,$value) {
    $this->$name = $value;
    return;
  }

  public function __get($name) {
    return $this->$name;
  }

  public function __destruct() {

  }

  static public function math($a,$b){
    return ($a+$b) * $a;
  }
}

?>
