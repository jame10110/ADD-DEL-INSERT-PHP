<?php

	$dbhost="localhost";
	$dbname = "test";
	$dbuser = "root";
	$dbpasswd = "";
	$mysqli = new mysqli($dbhost, $dbuser, $dbpasswd, $dbname);

	if ($mysqli->connect_errno) {
		echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
		exit();
	}
	
	if (!$mysqli->set_charset("utf8")) {
		printf("Error loading character set utf8: %s\n", $mysqli->error);
	}else
	{
		//echo "connected";
	}

?>