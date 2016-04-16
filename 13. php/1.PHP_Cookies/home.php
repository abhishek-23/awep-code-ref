<?php
	$fullname = $profession = "";
	if(isset($_COOKIE['id']))
	{
		$fullname = $_COOKIE['fullname'];
		$profession = $_COOKIE['profession'];
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
