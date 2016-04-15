<?php
	
	$x = new stdClass();

	$x->name = "Rohan Sharma";
	$x->age = 24;
	$x->randomNumbers = array(23, 32, 44, 23, 66);
	
	$y = new stdClass();
	$y->english = 33;
	$y->science = 35;
	$y->maths = 40;
	$y->computers = 45;

	$x->marks = $y;

	echo json_encode($x);
