<?php

$max_size = 1024000;

if ($_FILES["mypicture"]["size"] < $max_size && $_FILES["mydocument"]["size"] < $max_size) { // File greater than 1 MB will be rejected
	
	$file1status = $file2status = false;

	$file1status = move_uploaded_file($_FILES["mypicture"]["tmp_name"], "uploads/" . basename($_FILES['mypicture']["name"]) );

	$file2status = move_uploaded_file($_FILES["mydocument"]["tmp_name"], "uploads/" . basename($_FILES['mydocument']["name"]) );

	If($file1status && $file2status){
		echo "Both files uploaded successfully.";
	}else{
		echo "Something went wrong!";
	}
}
else
{
	echo "File size greater than 1 MB not allowed!";
}
