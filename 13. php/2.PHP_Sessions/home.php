<?php
	session_start();

	$fullname = $profession = "";

	if(isset($_SESSION['id']))
	{
		$connection = mysqli_connect("localhost", "root", "", "learnjsphp") or die(mysql_error());

		$result = mysqli_query($connection, "SELECT * FROM `login_info` WHERE `id`=\"" . $_SESSION['id'] . "\"");

		if($row = mysqli_fetch_assoc($result))
		{
			$fullname   = $row['fullname'];
			$profession = $row['profession'];
		}
		
		mysqli_close($connection);
	}
	else
	{
		header("Location: login.php?error=Please_login_first");
		exit();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	Welcome <?php echo $fullname ?> ( <?php echo $profession; ?>)
	<a href="logout.php">Logout</a>
</body>
</html> 
