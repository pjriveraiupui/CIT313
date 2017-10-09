<?php
class user extends Model {
  public function __construct($user_level) {
parent::__construct($user_level);

}

    public function __set($name,$value) {

    }

    public function __get($name) {

    }

    public function __destruct() {

    }
    function getName($value) {
      return $value;
    }
  }

?>
