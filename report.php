

<body>

<style>
  /* Style for the widget container */
.widget {
    border: 1px solid #ddd;
    border-radius: 10px;
}

/* Style for the widget header */
.widget-header {
    background-color: #f5f5f5;
    padding: 10px 20px;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}

/* Style for the widget title */
.widget-title {
    margin: 0;
}

/* Style for the separator line */
.widget-separator {
    margin: 20px 0;
}

/* Style for form labels */
.form-group label {
    font-weight: bold;
}

/* Style for input fields */
.form-control {
    border-radius: 8px;
    border: 1px solid #ccc;
    padding: 10px;
}

/* Style for submit button */
.btn-success {
    background-color: #28a745;
    border: none;
    padding: 10px 20px;
    border-radius: 8px;
    color: #fff;
}

.btn-success:hover {
    background-color: #218838;
}

/* Adjust margins for the submit button */
.form-group .col-sm-9 {
    margin-top: 10px;
}
/* Style for the widget container */
.widget {
    border: 1px solid #ddd;
    border-radius: 10px;
    width: 100%;
}

/* Style for the widget header */
.widget-header {
    background-color: #f5f5f5;
    padding: 10px 20px;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}

/* Style for the widget title */
.widget-title {
    margin: 0;
}

/* Style for the separator line */
.widget-separator {
    margin: 20px 0;
}

/* Style for form labels */
.form-group label {
    font-weight: bold;
}

/* Style for input fields */
.form-control {
    border-radius: 8px;
    border: 1px solid #ccc;
    padding: 10px;
}

/* Style for submit button */
.btn-success {
    background-color: #28a745;
    border: none;
    padding: 10px 20px;
    border-radius: 8px;
    color: #fff;
}

.btn-success:hover {
    background-color: #218838;
}

/* Adjust margins for the submit button */
.form-group .col-sm-9 {
    margin-top: 10px;
}
</style>



<main id="app-main" class="app-main">
  <div class="wrap">
  <section class="app-content">
    <div class="row">
     
      <div class="col-md-12">
        <div class="widget">
          <header class="widget-header">
            <h3 class="widget-title">Between Dates Report of Booking</h3>
          </header><!-- .widget-header -->
          <hr class="widget-separator">
          <div class="widget-body">
           
            <form class="form-horizontal" method="POST" name="report" action="#">
              <div class="form-group">
                <label for="exampleTextInput1" class="col-sm-3 control-label">From Date:</label>
                <div class="col-sm-9">
                  <input type="date" class="form-control" id="fromdate" name="date1" value="<?php echo isset($_POST['date1']) ? $_POST['date1'] : '' ?>"  required='true'>
                </div>
              </div>

              <div class="form-group">
                <label for="email2" class="col-sm-3 control-label">To Date:</label>
                <div class="col-sm-9">
                  <input type="date" class="form-control" id="todate" name="date2" value="<?php echo isset($_POST['date2']) ? $_POST['date2'] : '' ?>"  required='true'>
                </div>
              </div>
         
              <div class="row">
                <div class="col-sm-9 col-sm-offset-3">
                  <button type="submit" class="btn btn-success" name="submit">Search</button>
                </div>
              </div>
            </form>
          </div><!-- .widget-body -->
        </div><!-- .widget -->
      </div><!-- END column -->

    </div><!-- .row -->
  </section><!-- #dash-content -->
</div><!-- .wrap -->


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<div class="container"><br>
    <h2 style = "color: black; text-align: center;">BOOKING REPORT</h2>
        <table class="table">
  <thead>
    <tr>
    <th scope="col">#</th>
	<th scope="col">First Name</th>
	<th scope="col">Last Name</th>
      <th scope="col">Adult</th>
      <th scope="col">Child</th>
      <th scope="col">Arrival date</th>
      <th scope="col">Departure date</th>
    </tr>
  </thead>
  <tbody>
    <?php
	include('connect_db.php');
	include 'customer_header.php';
//include 'customer_navbar.php';
//include 'customer_sidebar.php';
	if(ISSET($_POST['submit'])){

		$date1 = $_POST['date1'];

		$date2 = $_POST['date2'];
		
		$query=mysqli_query($con, "SELECT * FROM bookings
		INNER JOIN customers ON bookings.customer_id = customers.customer_id 
		 
		WHERE DATE(bookings.start_date) >= '".$date1."'
		AND DATE(bookings.start_date) <= '".$date2."'") or die(mysqli_error());
		if($query->num_rows > 0){
			$count = 1;
			while($fetch=mysqli_fetch_array($query))
			{
				echo "<tr>";
				echo '<td scope="row">' .$count++. "</td>";
				echo "<td>".$fetch['first_name']."</td>";
			    echo "<td>".$fetch['last_name']."</td>" ;
				echo "<td>".$fetch['adult']."</td>";
				echo "<td>".$fetch['child']."</td>";
				echo "<td>".$fetch['start_date']."</td>";
				echo "<td>".$fetch['end_date']."</td>";
			 echo " </tr>";
			}

		}else{
			echo 'Result not found';
		}
	}	
?>
  </tbody>
</table>
</body>
</html>