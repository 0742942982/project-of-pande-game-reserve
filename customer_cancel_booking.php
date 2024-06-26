<?php
session_start();
include 'connect_db.php';
if($_GET['customer_id']){
    $customer_id = $_GET['customer_id'];

    $sql = "DELETE FROM bookings WHERE booking_id = '$customer_id'";
    $result = mysqli_query($con, $sql);

    if($result){
        $_SESSION['message'] ='cancel booking successful';
        header('location: view_booking.php');
    }
    else{
        echo "<script type = 'text/javascript'>alert('data deleted successful');</script>";
    }
}


?>