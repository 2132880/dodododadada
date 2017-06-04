<?php
	if (session_status() == PHP_SESSION_NONE) {
	    session_start();
	}
	if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])){
		//array_splice($_SESSION['cart'], $_POST['index'], 1);
		$index = $_POST['index'];
		unset($_SESSION['cart'][$index]);
	} 
	echo count($_SESSION['cart']);
?>