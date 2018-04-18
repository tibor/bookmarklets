<?php
include_once("bookmarklets.php");

foreach($bookmarklets as $b){
	echo "test";
	echo '<a href="' . $b["bookmarklet"] . '">' . $b["title"] . '</a></br>';
}

?>
