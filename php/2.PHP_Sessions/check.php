<?php
	$connection = mysqli_connect("localhost", "root", "", "learnjsphp") or die(mysqli_connect_error());

	$result = mysqli_query($connection, "SELECT * FROM `login_info` WHERE `username`=\"" . $_POST['username'] . "\"") or die(mysqli_error($connection));

	if($row = mysqli_fetch_assoc($result))
	{
		if( md5($_POST['password']) == $row['password'] )
		{
			session_start();

			$_SESSION["id"] = $row['id'];

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
