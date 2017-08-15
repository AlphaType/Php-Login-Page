<?php
	session_start();

	$conn = mysqli_connect("localhost","username","password","database");

	if (!$conn) {
		die("CONNECTION FAILED:".mysqli_connect_error());
	}
?>