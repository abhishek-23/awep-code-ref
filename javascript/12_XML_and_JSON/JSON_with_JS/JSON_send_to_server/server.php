<?php
	
	$phpObject = json_decode($_POST['jsonString']);

	$name =  $phpObject->name;
	$age =  $phpObject->age;

	$marks =  $phpObject->marks;

	$english =  $marks->english;
	$science =  $marks->science;
	$maths =  $marks->maths;
	$computers =  $marks->computers;

?>

<table border="1">
	<caption>Table created by PHP</caption>
	<tr><td><?php echo $name; ?></td></tr>
	<tr><td><?php echo $age; ?></td></tr>
	<tr><td>English: <?php echo $english; ?></td></tr>
	<tr><td>Science: <?php echo $science; ?></td></tr>
	<tr><td>Maths: <?php echo $maths; ?></td></tr>
	<tr><td>Computers: <?php echo $computers; ?></td></tr>
</table>
