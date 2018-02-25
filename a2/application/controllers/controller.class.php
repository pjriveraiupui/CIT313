<?php
class Controller {
  public $load;
  public $user;

  function __construct() {
    $this->load = new Load();
    $this->user = new User();
    $this->home();
  }
  function home() {
    $this->user->userID = "pjrivera";
      $this->user->firstname = "Patrick";
      $this->user->lastname = "Rivera";
      $this->user->email = "pjrivera@iupui.edu";
      $this->user->role = "admin";


      $data = $this->user->getName();
      $this->load->view('view.php',$data);
  }
}
?>
