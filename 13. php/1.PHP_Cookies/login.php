<?php
	$errormessage = "";
	if(isset($_GET['error']))
	{
		$errormessage = $_GET['error'];
		$errormessage = str_replace("_", " ", $errormessage);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP Cookies</title>
</head>
<body>
	<div style="color: #ff0000; text-align: center;"><?php echo $errormessage; ?></div>
	<form action="check.php" method="post">
		Username : <input type="text" name="username" value="root" /> Password <input type="password" name="password" value="Welcome123" />
		<br/><br/>
		<input type="submit" value="Login" />
	</form>
	<br/><br/>
	<table border="1">
		<tr><th>Username</th><th>Password</th></tr>
		<tr><td>root</td><td>Welcome123</td></tr>
		<tr><td>rkhanna</td><td>Welcome@123</td></tr>
		<tr><td>rshetty</td><td>Welcome@123</td></tr>
		<tr><td>dpatil</td><td>Welcome@123</td></tr>
		<tr><td>roshnig</td><td>Welcome@123</td></tr>
	</table>
</body>
</html> 
