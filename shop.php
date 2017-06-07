<?php

	if (session_status() == PHP_SESSION_NONE) {
	    session_start();
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <title>AGG DOORS - Online Shopping</title>

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
            <li class="active"><a href="index.html">HOME</a></li>
            <li><a href="about.html">ABOUT</a></li>
            <li><a href="contact.html">CONTACT</a></li>
			<li><a href="services.html">SERVICES</a></li>
			<li><a href="contact.html">ONLINE SHOPPING</a></li>
			
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

	<!-- *****************************************************************************************************************
	 BLUE WRAP
	 ***************************************************************************************************************** -->
	<div id="blue" >
	    <div class="row">
	    	<a class="navbar-brand">Online Shopping</a>
	    	<div style = "padding-top:5%">
	    		<a href = "./shopping-cart.php" > 
					<span class="glyphicon glyphicon-shopping-cart"></span>
					<span class = "badge" id = "cart-badge">
						<?=( isset($_SESSION['cart']) ? count($_SESSION['cart']) :"0") ?>
					</span>
				</a>
	    	</div>
	    </div>
				
							
		
					
				
	</div><!-- /blue -->

	 
	<!-- *****************************************************************************************************************
	 AGENCY ABOUT
	 ***************************************************************************************************************** -->

	 <div class="container mtb2">
	 	<div class="row">
	 		<?php include('1.php');?>
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
	<script>
		$(document).ready(function(){
			//Add to cart function
			$('button.btn.btn-primary.add-to-cart').on('click', function(){
				var prod_id = $(this).attr('id');
				var prod_name = $('#name-'+prod_id).val();
				var prod_image_dir = $('#image_dir-'+prod_id).val();
				var prod_price = $('#price-'+prod_id).val();
				var prod_qty = $('#qty-'+prod_id).val();
				
				$.ajax({
					url: './cart/add_to_cart.php',
					type:'POST',
					data: {
						id: prod_id,
						name: prod_name,
						image_dir: prod_image_dir,
						price: prod_price,
						qty: prod_qty
					},
					success: function(response){
						$('#cart-badge').text(response);
					}
				});
			});
			//Filter function
			var clickOnce = false;
			$("#product-filters li input").on('click', function(){
				if($("#product-filters li input:checkbox:checked").length == 0 ){
					console.log("none checked");
					clickOnce = false;
					$('.product').show();
					$("#product_table_filter input[type=search]").val('');
				}
				else{
					if (!clickOnce) {
				        $('.product').hide();
				        $('.product[data-category="'+$(this).attr('data-category')+'"]').show();
				        clickOnce = true;
					} 
					else {
				        $('.product[data-category="'+$(this).attr('data-category')+'"]').toggle();
					}
				}
				
				
			});




			$('#product_table').dataTable({
				
				"bLengthChange": false,
				"bFilter": true,
				"bInfo": false,
			});



			
		});
	</script>



  </body>
</html>
