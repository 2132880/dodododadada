<?php
	include('connection.php');
	
	foreach($_SESSION['cart'] as $key => $cart_item){
		$cart_item['name'];
		$cart_item['qty'];
		$cart_item['price'];
	}
?>