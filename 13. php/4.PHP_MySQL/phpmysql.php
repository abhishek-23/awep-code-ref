<?php
	$connection = mysqli_connect("localhost", "root", "", "learnjsphp") or die(mysql_error());
	
	$query = "SELECT * FROM `login_info` WHERE `username`=\"root\""; // Hard coded value 'root' is assumed here.
	
	// Examine query by echoing/printing it to html. (If required, when sql query fails)
	echo $query;
	
	$result = mysqli_query($connection, $query) or die(mysql_error());

	$myarray = array();
	$i = 0;
	
	while($row = mysqli_fetch_assoc($result))
	{
		$myarray[$i] = $row;
		$i++;
	}

	
	// You can even put whole array in session like this:
	// session_start();
	//$_SESSION['myarray'] = $myarray;
	
	mysqli_close($connection);
	
	// We are just checking the data how it looks internally when we receive data from database
	var_dump($myarray);