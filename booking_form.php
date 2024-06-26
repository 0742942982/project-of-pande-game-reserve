<?php
session_start();
if( $_SESSION['u_id']){
	// printf($row['customer_id']);
	 $_SESSION['u_id'];
	
	}
include('connect_db.php');
if(isset($_POST['submit'])) {
	$adult= $_POST['adult'];
	$child= $_POST['child'];
	$arrival= $_POST['arrival'];
	$departure= $_POST['departure'];
	$customer_id = $_SESSION['u_id'];
	$status = 1;

	$sql= "INSERT INTO bookings(customer_id,adult,child,start_date,end_date,status)
	 VALUES('$customer_id','$adult','$child','$arrival', '$departure','$status')";
    $result=mysqli_query($con,$sql);
	if($result){
		echo "<script type = 'text/javascript'>alert('Booking created Successful')</script>";
		header('location: customer_dashboard.php');
	}
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Booking Form HTML Template</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,900" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	
	<div id="booking" class="section">
		<div class="section-center">
			<a style = "margin-top: -28%;" class = "btn btn-primary" href= "customer_dashboard.php"> BACK </a>
				<div class="container">
			
				<div class="row">
					<div class="col-md-5">
						<div class="booking-cta">
							<h1>Make your booking</h1>
							<p>Dont be heststated booking to us a camping and picnic and get gift! </p>
						</div>
					</div>
					<div class="col-md-6 col-md-offset-1">
						<div class="booking-form">
							<form action="#" method= "POST">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
                                        <input class="form-control" name="adult" type="number" min = '1'>
											<span class="form-label">Adult</span>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
                                        <input class="form-control" name="child" type="number" min = '1'>
											<span class="form-label">Child</span>
										
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
                                        <input class="form-control" type="datetime-local" name="arrival">
											<span class="form-label">Arrival Date</span>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
                                        <input class="form-control" type="datetime-local" name="departure">
											<span class="form-label">Departure Date</span>
										</div>
									</div>
									
								</div>
								<div class="form-btn">
									<button class="submit-btn" type="submit" name="submit">Book Now</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="js/jquery.min.js"></script>
	<script>
		$('.form-control').each(function () {
			floatedLabel($(this));
		});

		$('.form-control').on('input', function () {
			floatedLabel($(this));
		});

		function floatedLabel(input) {
			var $field = input.closest('.form-group');
			if (input.val()) {
				$field.addClass('input-not-empty');
			} else {
				$field.removeClass('input-not-empty');
			}
		}
	</script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
</body>
</html>