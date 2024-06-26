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


<div class="col-md-12">
        <div class="widget">
          <header class="widget-header">
            <h3 class="widget-title">Between Dates Report of Booking</h3>
          </header><!-- .widget-header -->
          <hr class="widget-separator">       
          <div class="widget-body">
           
            <form class="form-horizontal" method="post" name="bwdatesreport" action="appointment-bwdates-reports-details.php">
              <div class="form-group">
                <label for="exampleTextInput1" class="col-sm-3 control-label">From Date:</label>
                <div class="col-sm-9">
                  <input type="date" class="form-control" id="fromdate" name="fromdate" value="" required='true'>
                </div>
              </div>
              <div class="form-group">
                <label for="email2" class="col-sm-3 control-label">To Date:</label>
                <div class="col-sm-9">
                  <input type="date" class="form-control" id="todate" name="todate" value="" required='true'>
                </div>
              </div>
         
              <div class="row">
                <div class="col-sm-9 col-sm-offset-3">
                  <button type="submit" class="btn btn-success" name="submit">Submit</button>
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
    <title> Search Report</title>
    <style>
          .table{
            margin-left: 125px;
            margin-top: 20px;
          }
         </style>
</head>
<body>
<form action="index.php" method="get">
From : <input type="text" name="d1" class="tcal" value="" /> To: <input type="text" name="d2" class="tcal" value="" /> <input type="submit" value="Search">
</form>
<table id="resultTable" data-responsive="table" style="text-align: left; width: 400px;" border="1" cellspacing="0" cellpadding="4">

<div class="container">
        <table class="table">
  <thead>
    <tr>
    <th scope="col">#</th>
      <th scope="col">First name</th>
      <th scope="col">Last name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Adult</th></th>
      <th scope="col">Child</th>
      <th scope="col">Arrival date</th>
      <th scope="col">Departure date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $count = 1;
        while($info=mysqli_fetch_assoc($result))
        {
    ?>
    <tr>
      
    </tr>
        </div>
   <?php
    }
   ?>
  </tbody>
</table>


</div>
</body>
</html>