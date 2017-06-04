<?php
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = 'usbw';
	$dbName = 'online_shop';
	$connection = mysqli_connect($dbhost, $dbuser, $dbpass);

	if (!$connection){
	    die("Database Connection Failed" . mysqli_error($connection));
	}
	$select_db = mysqli_select_db($connection, 'online_shop');
	if (!$select_db){
	    die("Database Selection Failed" . mysqli_error($connection));
	}
?>