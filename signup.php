<?php
	include 'header.php';
	include 'dbaseh.php';

	$first = $_POST['first'];
	$last = $_POST['last'];
	$uid = $_POST['uid'];
	$pwd = $_POST['pwd'];
	if(empty($first)){
		header("Location:su.php?error=empty");
		exit();
	}
	if(empty($last)){
		header("Location:su.php?error=empty");
		exit();
	}
	if(empty($uid)){
		header("Location:su.php?error=empty");
		exit();
	}
	if(empty($pwd)){
		header("Location:su.php?error=empty");
		exit();
	}
	else
	{
		$sql="SELECT uid FROM user WHERE uid='$uid'";
		$results = $conn->query($sql);
		$ch = mysqli_num_rows($results);
		if($ch){
			header("Location:su.php?error=username");
			exit();
		}
		else {
			$sql = "INSERT INTO user(first,last,uid,pwd) 
					VALUES('$first','$last','$uid','$pwd')";
			$results = $conn->query($sql);

			header("Location:index.php");
		}
	}
?>