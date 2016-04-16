<?php
	$connection = mysqli_connect("localhost", "moodle", "Welcome@123", "learnjsphp") or die(mysql_error());

	$result = mysqli_query($connection, "SELECT * FROM `login_info` WHERE `username`=\"" . $_POST['username'] . "\"") or die(mysql_error());

	if($row = mysqli_fetch_assoc($result))
	{
		if( md5($_POST['password']) == $row['password'] )
		{
			setcookie("id", 		$row['id'], 		time() + (60 * 60 * 24), "/");
			setcookie("username", 	$row['username'], 	time() + (60 * 60 * 24), "/");
			setcookie("fullname", 	$row['fullname'], 	time() + (60 * 60 * 24), "/");
			setcookie("profession",	$row['profession'], time() + (60 * 60 * 24), "/");

			header("Location: home.php");
		}
		else
		{
			header("Location: login.php?error=Invalid_Credentials");
		}
	}
	else
	{
		header("Location: login.php?error=Username_not_found_in_our_database");
	}
	mysqli_close($connection);
