<?php
	include 'header.php';
	include 'dbaseh.php';

	$uid = $_POST['uid'];
	$pwd = $_POST['pwd'];

	$sql = "SELECT * FROM user WHERE uid='$uid' AND pwd='$pwd'";
	$results = $conn->query($sql);

	if(!$row = $results->fetch_assoc())
	{
		echo "Your username or password is incorrect!";
	}
	else
	{
		$_SESSION['id'] = $row['id'];
	}
	header("Location:index.php");

?>