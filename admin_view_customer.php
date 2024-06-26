<?php 
error_reporting(0);
include('connect_db.php');
include('admin_sidebar.php');
include('admin_navbar.php');
include('admin_header.php');

 
$sql =  "SELECT * FROM customers WHERE user_type='customer'";

$result = mysqli_query($con, $sql);




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User view booking</title>
        <!--bootstrap link------->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
         crossorigin="anonymous">
         <style>
          .table{
            margin-left: 125px;
            margin-top: 25px;
          }
         </style>
</head>
<body>
  <?php
     if($_SESSION['message1']){
      $message = $_SESSION['message1'];
      echo "<script type = 'text/javascript'>alert('cancel successful')</script>";
      unset($_SESSION['message']);
     }
  ?>

<div class="container"><br><br><br>
<h2 style = "text-align: center;">Admin View Customer</h2>
        <table class="table">
  <thead>
    <tr>
    <th scope="col">#</th>
      <th scope="col">First name</th>
      <th scope="col">Last name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
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
      <td scope="row"><?php echo $count++;?></td>
      <td><?php echo "{$info['first_name']}"; ?></td>
     <td><?php echo "{$info['last_name']}"; ?></td> 
      <td><?php echo "{$info['email']}"; ?></td>
      <td><?php echo "{$info['phone']}"; ?></td>
      <td><?php echo "<a onclick = \" javascript:return confirm('Are you sure you want to delete');\" 
      class = 'text-light btn btn-danger' href='admin_delete_customer.php?customer_id={$info['customer_id']}'>Delete</a>" ?></td>
       
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