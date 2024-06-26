<?php session_start();

 
include("./connect_db.php");
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST["email"];
    $pass = $_POST["password"];

    $sql = "SELECT * FROM customers WHERE email = '".$email."' AND password = '".$pass."' ";
    $result = mysqli_query($con,$sql);
    if (mysqli_num_rows($result)>0) {
        
    $row = mysqli_fetch_assoc($result);

    $_SESSION['u_id']= $row['customer_id'];
  

    if($row['user_type'] == "admin"){
        session_start();
        $_SESSION['userlogin'] = $row;
        header("location:admin_view_booking.php");
    }
    elseif($row['user_type'] == "customer")
    {
        session_start();
        $_SESSION['userlogin'] = $row;
        header("location:customer_dashboard.php");
    }
  
    } else{
        $message = 'Email or Password do not match';
        $_SESSION['message'] = $message;
        header('location: login_form.php');
     } 
}
if( $_SESSION['u_id']){
   // printf($row['customer_id']);
   echo $_SESSION['u_id'];
   
   }

?>