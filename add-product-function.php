<?php
	require_once './connect_db/connect.php';

	if(isset($_POST['submit'])){
		
		$target_dir = "assets/img/products/";
		$target_file = $target_dir . basename($_FILES["image"]["name"]);
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		
		$file_name = $target_dir.$_POST['prod_name'].".".$imageFileType;

		$check = getimagesize($_FILES["image"]["tmp_name"]);
	    if($check !== false) {
	    	move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
	    	
	    	$stmt = $connection->prepare("INSERT INTO products (brand, name, price, status, image_dir, category) 
	    		VALUES (?,?,?,?,?,?)");
	    	$stmt->bind_param("ssdiss", $brand, $prod_name,$price,$status,$target_file,$category);

	    	$brand = $_POST['brand'];
	    	$prod_name = $_POST['prod_name'];
	    	$price = $_POST['price'];
	    	$category = $_POST['category'];
	    	$status = 1;
	    	
	        if(!$stmt->execute()){
	        	echo mysqli_error($connection);
	        }
	        else{
	        	header('Location: add-product.php');

	        }
	    } else {
	        header('Location: add-product.php');
	    }
	}
	exit();

?>