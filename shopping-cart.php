<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <title>AGG DOORS - About us</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">


    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <script src="assets/js/modernizr.js"></script>
  </head>

  <body>

   <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand text-center" href="index.html"><img id = "logo" src="assets/gallery/AGG-Door-Logo.png" alt="AGG-DOORS-LOGO" width="30" height="30"/>AGGDOORS</a>
        </div>
        <div class="navbar-collapse collapse navbar-right">
          <ul class="nav navbar-nav">
            <li><a href="index.html">HOME</a></li>
            <li><a href="about.html">ABOUT</a></li>
            <li><a href="contact.html">CONTACT</a></li>
			<li><a href="services.html">SERVICES</a></li>
			<li class="active"><a href="shop.php">PRODUCTS AND SHOPPING</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

	<!-- *****************************************************************************************************************
	 BLUE WRAP
	 ***************************************************************************************************************** -->
	<div id="blue">
	    <div class="container">
			<div class="row">
				<h3>Shopping Cart</h3>
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /blue -->

	 
	<!-- *****************************************************************************************************************
	 AGENCY ABOUT
	 ***************************************************************************************************************** -->

	 <div class="container mtb2">
	 	<div class="row">
	 		<section>
			<div class="row">
				<div class="col-sm-12">
					<table class="table table-striped">
						<thead>
							<th>Item</th>
							<th>Quantity</th>
							<th>Price</th>
							<th></th>
						</thead>
						<tbody>
							<?php
								session_start();
								$total = 0;
								if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])){
									foreach($_SESSION['cart'] as $key => $cart_item){?>
										<tr id = "row-<?=$key?>">
											<td>
												<img src = "<?=$cart_item['image_dir']?>" height="173px" width="173">
												<h3><?=$cart_item['name']?></h3> 
											</td>
											<td>
												<input type="number" value = "<?=$cart_item['qty']?>">
											</td>
											<td>
												<h4>₱<?=$cart_item['price']?></h4>
											</td>
											<td>
												<button class = "btn btn-danger" id = "<?=$key?>">Remove 
													<span class="badge">X</span></button>
											</td>
										</tr>
										
									<?php 
										$total = $total + $cart_item['price'];
										$_SESSION['total'] = $total;
									}
									?>
									<tr>
										<td><?php echo "Total Amount: ". $total;?></td>
									</tr>
									<tr>
										<td><a href = "shop.php" class = "btn btn-danger">Back</a></td>
										<td><a href = "checkout.php" class = "btn btn-danger">Checkout</a></td>
									</tr>
									<?php
								} else { ?>
									<tr><td>Cart is empty.</td></tr>
									<tr><td><a href = "shop.php" class = "btn btn-danger">Back</a></td></tr>
								<?php 
								} 
								?>
								
						</tbody>
					</table>
				</div>
			</div>
		</section>
	 	</div>
	 </div>
	<!-- *****************************************************************************************************************
	 FOOTER
	 ***************************************************************************************************************** -->
	 <div id="footerwrap">
	 	<div class="container">
		 	<div class="row">
		 		<div class="col-md--4">
					<div class="hline-w"></div>
					<p>All rights reserved</p>
		 			<p>©AGGDOORS 2017</p>
		 		</div>
		 		<div class="col-md--4">
		 			<div class="hline-w"></div>
		 			<p>
		 				<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>
		 				<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-google-plus"></i></a>
		 				<a href="#"><i class="fa fa-youtube"></i></a>
						<a href="#"><i class="fa fa-phone"></i></a>
						<a href="#"><i class="fa fa-envelope"></i></a>
		 			</p>
		 		</div>
		 		<div class="col-md--4">
		 			<div class="hline-w"></div>
		 			<p>OPENING HOURS<br/>
					Mon - Fri: 9am to 5pm / Sat: 9am to 12pm</p>

					<p>FACTORY ADDRESS<br/>
					Factory 11 No. 17-23 Keppel Drive Hallam. Victoria 3803<br/>
					Australia </p>
		 		</div>
		 	
		 	</div><! --/row -->
	 	</div><! --/container -->
	 </div><! --/footerwrap -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.min.js"></script>
  	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.css">
	<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.hoverdir.js"></script>
	<script src="assets/js/jquery.hoverex.min.js"></script>
  	<script src="assets/js/custom.js"></script>
	<script type="text/javascript" src = "./js/paginate.js"></script>
	
	<script type="text/javascript">
			$(document).ready(function(){
				
				$('button.btn.btn-danger').on('click', function(){
					$('#row-'+$(this).attr('id')).remove();
					$.ajax({
						url: './cart/remove_from_cart.php',
						type:'POST',
						data: {
							index: $(this).attr('id'),
						},
						success: function(response){
							$('#cart-badge').text(response);
							
						},
						error: function(err){
							alert(err);
						}
					});
				});
			});
		</script>
	

  </body>
</html>
