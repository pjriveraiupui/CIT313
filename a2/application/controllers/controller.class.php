<?php
class controller {
  public $load;
  public $model;

  function __construct() {
    $this->load = new Load();

    $this->home();
  }
  function home() {
    $data = $this->user->getName();
    $load->view('view.php',$data);
    $userID = "pjrivera";
      $firstname = "Patrick";
      $lastname = "Rivera";
      $email = "pjrivera@iupui.edu";
      $role = "admin";
  }
}
?>
