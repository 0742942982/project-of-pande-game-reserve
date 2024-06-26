<?php
session_start();
include 'connect_db.php';
if($_GET['customer_id']){
    $customer_id = $_GET['customer_id'];

    $sql = "DELETE FROM customers WHERE customer_id = '$customer_id'";
    $result = mysqli_query($con, $sql);

    if($result){
        $_SESSION['message1'] ='delete customer successful';
        header('location: admin_view_customer.php');
    }
    else{
        echo "<script type = 'text/javascript'>alert('data deleted successful');</script>";
    }
}


?>