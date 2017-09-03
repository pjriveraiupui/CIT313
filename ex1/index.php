<?php

	include("_includes/config.php");


?>
<?php
$pref = array("Patrick Rivera", "Blue", "John Wick", "The Last Wish", "YouTube");

echo "<h1> $pref[0] </h1>";



$firstElement = true;

foreach($pref as $val) {
  if($firstElement) {
    $firstElement = false;
  } else {
    echo "<ul> $val\n </ul>";
  }
}

?>
