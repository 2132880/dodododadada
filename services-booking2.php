<?php
	session_start();
	$date = $_POST['date'];
	$time = $_POST['resTime'];
	$_SESSION['date'] = $date;
	$_SESSION['time'] = $time;
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

    <title>AGG DOORS - Service - Booking</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap2.css" rel="stylesheet">

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

    <!-- Fixed navbar -->
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
			<li class="active"><a href="services.html">SERVICES</a></li>
			<li><a href="shop.html">ONLINE SHOPPING</a></li>
			
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
				<h3>Booking</h3>
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /blue -->

	<!-- *****************************************************************************************************************
	 CONTACT FORMS
	 ***************************************************************************************************************** -->
	<div id="grey">
		 <div class="container mtb">
			<p class="bg-success col-xs-3">Step 1.</p>
			<p class="bg-warning col-xs-3">Step 2.</p>
			<p class="bg-danger col-xs-3">Step 3.</p>
			<p class="bg-danger col-xs-3">Step 4.</p>
			<form class="form-horizontal" action="services-booking3.php" method = "post">
					
					<div class="form-group">
						<label class="control-label col-sm-2" for="serviceType">What type of service do you want?</label>
						<div class="col-sm-10">
						  <input type="text" class="form-control" name = "serviceType" id="serviceType" placeholder="Type of Service" required>
						</div>
					</div>
					 <div class="form-group">
						<label class="control-label col-sm-2" for="email">Email:</label>
						<div class="col-sm-10">
						  <input type="email" class="form-control" name = "email" id="email" placeholder="Enter email" required>
						</div>
					  </div>
				   <div class="form-group">
						<label class="control-label col-sm-2" for="firstName">First Name:</label>
						<div class="col-sm-10">
						  <input type="text" class="form-control" name = "firstName" id="firstName" placeholder="First Name" required>
						</div>
					</div>
				   <div class="form-group">
						<label class="control-label col-sm-2" for="lastName">Last Name:</label>
						<div class="col-sm-10">
						  <input type="text" class="form-control" name = "lastName" id="lastName" placeholder="Last Name" required>
						</div>
					</div>
					 <div class="form-group">
						<label class="control-label col-sm-2" for="contactNumber">Contact Number: </label>
						<div class="col-sm-10"> 
						  <input type="text" class="form-control" name = "contactNumber" id="contactNumber" placeholder="Contact Number" required>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="address">Complete Address:</label>
						<div class="col-sm-10">
						  <input type="text" class="form-control" name = "address" id="address" placeholder="Address" required> 
						</div>
					</div>
					
					<div class="form-group"> 
						<div class="col-sm-offset-2 col-sm-10">
						<input type = "submit" class="btn btn-default"  name = "nextpage3" value = "Next">
					  </div>
					</div>
				</form>
		 </div><! --/container -->
	</div>

	<!-- *****************************************************************************************************************
	 FOOTER
	 ***************************************************************************************************************** -->
	 <div id="footerwrap">
	 	<div class="container">
		 	<div class="row">
		 		<div class="col-md-4">
					<div class="hline-w"></div>
					<p>All rights reserved</p>
		 			<p>©AGGDOORS 2017</p>
		 		</div>
		 		<div class="col-md-4">
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
		 		<div class="col-md-4">
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
    <script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.hoverdir.js"></script>
	<script src="assets/js/jquery.hoverex.min.js"></script>
  	<script src="assets/js/custom.js"></script>


  </body>
</html>
