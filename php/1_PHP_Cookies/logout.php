<?php

	setcookie("id", 		"", time() - 1, "/");
	setcookie("username", 	"", time() - 1, "/");
	setcookie("fullname", 	"", time() - 1, "/");
	setcookie("profession",	"", time() - 1, "/");

	header("Location: login.php");
