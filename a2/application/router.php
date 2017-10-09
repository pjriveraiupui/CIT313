<?php
function x($class) {
include_once('application/'.strtolower($class).'.class.php');
}
spl_autoload_register('x');

function myLoad($class) {
    include_once('controllers/'.strtolower($class).'.class.php');
}
spl_autoload_register('myLoad');


function load($class) {
  include_once('models/'.strtolower($class).'.class.php');
}
spl_autoload_register('load');


new Controller();

 ?>
