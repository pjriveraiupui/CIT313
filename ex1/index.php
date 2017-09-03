<?php

	include("../_includes/config.php");


?>
<?php
$pref = array("Patrick", "Blue", "John Wick", "The Last Wish", "YouTube");

echo "<h1>" . $pref[0] . "/<h1>";


foreach ($pref as $value) {
  echo "$value <br>";

}

?>
