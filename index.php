<?php
include_once("bookmarklets.php");

foreach($bookmarklets as $b){
	echo '<a href="' . $b["bookmarklet"] . '">' . $b["title"] . '</a></br>';
}

?>
