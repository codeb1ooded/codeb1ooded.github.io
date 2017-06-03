<?php
	$con = mysqli_connect("localhost", "root", "");
	if (!$con) {
		die('Could not connect: ' . mysqli_error());
	}
	$db = mysqli_select_db($con, "id440301_codeb1ooded");
	if(!$db)
		echo " Connection to the database failed ";
?>
