<?php

	if (session_status() == PHP_SESSION_NONE) {
	    session_start();
	}
	
	if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])){
		$foundMatch = false;
		foreach ($_SESSION['cart'] as $key => $cart_item) {
			if(in_array($_POST['id'], $cart_item)){
				$_SESSION['cart'][$key]['qty'] += $_POST['qty']*1;
				$foundMatch = true;
				break;
			}
		}
		if(!$foundMatch){
			$item = array(
						"id" => $_POST['id'],
						"name" => $_POST['name'],
						"image_dir" => $_POST['image_dir'],
						"price" => $_POST['price'],
						"qty" => $_POST['qty'],
					);
			array_push($_SESSION['cart'], $item);
		}	
		
	} else {
		$_SESSION['cart'] = array();
		$item = array(
					"id" => $_POST['id'],
					"name" => $_POST['name'],
					"image_dir" => $_POST['image_dir'],
					"price" => $_POST['price'],
					"qty" => $_POST['qty'],
				);
		array_push($_SESSION['cart'], $item);
	}
	echo count($_SESSION['cart']);
?>