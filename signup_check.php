<?php 
include("./connect_db.php");
//error_reporting(0);
session_start();

if(isset($_POST["submit"])){
    $first_name=$_POST["first_name"];
    $last_name=$_POST["last_name"];
    $email = $_POST["email"];
    $phone_number = $_POST["phone_number"];
    $pass = $_POST["password"];
    $user_type = 'customer';


    $sql = "INSERT INTO customers(first_name, last_name, email, phone,password,user_type)
    VALUES ('$first_name','$last_name','$email', '$phone_number','$pass', '$user_type')";
  
  $result = mysqli_query($con,$sql);

  if($result){
      echo "data sent successful";
      header("location:./login_form.php");
   
  }
  else{
      echo "data not sent";
  }







}
?>