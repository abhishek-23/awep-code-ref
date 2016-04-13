<table border="1">
<?php
	$data = array(
				array("Rohit sharma", 23, "IT Consultant"), 
				array("Tina Sharma", 28, "Executive Director"), 
				array("Pulkit Mishra", 38, "Cook")
			);
	echo "\t<tr><th>Name</th><th>Age</th><th>Profession</th></tr>\n";
	foreach($data as $onerow)
	{
		 echo "\t<tr><td>" . $onerow[0] . "</td><td>" . $onerow[1] . "</td><td>" . $onerow[2] . "</td></tr>\n";
	}

?>
</table>
