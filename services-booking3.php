<?php
	session_start();
	$serviceType = $_POST['serviceType'];
	$email = $_POST['email'];
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$contactNumber = $_POST['contactNumber'];
	$address = $_POST['address'];
	$_SESSION['serviceType'] = $serviceType;
	$_SESSION['email'] = $email;
	$_SESSION['firstName'] = $firstName;
	$_SESSION['lastName'] = $lastName;
	$_SESSION['contactNumber'] = $contactNumber;
	$_SESSION['address'] = $address;
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
			<li><a href="contact.html">ONLINE SHOPPING</a></li>
			
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
			<p class="bg-success col-xs-3">Step 2.</p>
			<p class="bg-warning col-xs-3">Step 3.</p>
			<p class="bg-danger col-xs-3">Step 4.</p>
			<div class = "row centered">
				<div class = "col-xs-12">
					<p>Booking Details</p>
				</div>
				<div class = "col-xs-12">
					<form action = "services-booking4.php" method = "post">
						<div class = "table-responsive">
							
								<table class = "table">
									<tr>
										<td>Date of service</td>
										<td><?php echo $_SESSION['date'];?></td>
									<tr>
									<tr>
										<td>Time of service</td>
										<td><?php echo $_SESSION['time'];?></td>
									<tr>
									<tr>
										<td>Type of service</td>
										<td><?php echo $_SESSION['serviceType'];?></td>
									<tr>
									<tr>
										<td>First Name</td>
										<td><?php echo $_SESSION['firstName'];?></td>
									<tr>
									<tr>
										<td>Last Name</td>
										<td><?php echo $_SESSION['lastName'];?></td>
									<tr>
									<tr>
										<td>Email</td>
										<td><?php echo $_SESSION['email'];?></td>
									<tr>
									<tr>
										<td>Complete Address</td>
										<td><?php echo $_SESSION['address'];?></td>
									<tr>
									<tr>
										<td>Contact Number</td>
										<td><?php echo $_SESSION['contactNumber'];?></td>
									<tr>
								</table>
						</div>
						<div class="col-sm-offset-2 col-sm-10">
							<input type = "submit" class="btn btn-default"  name = "nextpage4" value = "Next">
						</div>
					</form>
				</div>
			</div>
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
