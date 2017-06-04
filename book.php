<?php
	session_start();
	$date = $_SESSION['date'];
	$time = $_SESSION['time'];
	$serviceType = $_SESSION['serviceType'];
	$email = $_SESSION['email'];
	$firstName = $_SESSION['firstName'];
	$lastName = $_SESSION['lastName'];
	$contactNumber = $_SESSION['contactNumber'];
	$address = $_SESSION['address'];
	
	include('connection.php');
	
	$sql = "INSERT INTO booking (date, time, serviceType, email, firstName, lastName, contactNumber, address)
						VALUES('$date', '$time', '$serviceType', '$email', '$firstName', '$lastName', '$contactNumber', '$address')";
	
	if ($connection->query($sql) === TRUE) {
		$connection->close();
		header('location: services-booking4.php');
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
?>