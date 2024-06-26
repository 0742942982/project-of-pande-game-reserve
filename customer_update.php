<?php
session_start();
include 'connect_db.php';
$customer_id = $_GET['c_id'];
$sql="SELECT * FROM customers WHERE customer_id = '$customer_id'";
$result = mysqli_query($con, $sql);
$info=mysqli_fetch_assoc( $result);
if(isset($_POST['update'])){
    $first_name=$_POST["first_name"];
    $last_name=$_POST["last_name"];
    $email = $_POST["email"];
    $phone_number = $_POST["phone_number"];
    $pass = $_POST["password"];
    $customer_id = $_GET['c_id'];

    $sql1 = "UPDATE FROM customers SET first_name='".$first_name."', last_name='".$last_name."', email='".$email."', phone='".$phone_number."',password='".$pass."' WHERE customer_id='$customer_id'";
    $result1 = mysqli_query($con,$sql1);
      

  if($result1){
      echo "update successful";
      header("location:./customer_dashboard.php");
   
  }
  else{
      echo "data not sent";
  }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-Up Form</title>
    <link rel = "stylesheet" href = "./bootstrap-5.3.1-dist/css/bootstrap.css">
    <link rel = "stylesheet" href = "./bootstrap-5.3.1-dist/js/bootstrap.js">
     <style>

 body {
  margin:0;
  padding:0;
  font-family: sans-serif;
  background: linear-gradient(#61419B, #D4C7EC);
}

form{
  width: 400px;
  background: #272525;
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.6);
  border-radius: 10px;
  border-top-right-radius: 0px;
  border-top-left-radius: 0px;
  padding: 40px;
  margin: auto;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
   transition: 0.3s ease;

}
form:hover{
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

label{
    color: #fff;
}
h2{
    color: #fff;
    text-align: center;
}
h1{
    color: #fff;
    text-align: center;
}
     </style>
</head>
<body>

<div class="container">
    <form action="#" method = "POST">
    <h2>UPDATE ACCOUNT FORM</h2>
           <div class="mb-3">
           <label for="exampleFormControlInput1" class="form-label">First Name</label>
           <input type="text" class="form-control"  name ="first_name" id="exampleFormControlInput1" Value="<?php echo $info["first_name"]; ?>" required>
           </div>

           <div class="mb-3">
           <label for="exampleFormControlInput1" class="form-label">Last Name</label>
           <input type="text" class="form-control"  name ="last_name" id="exampleFormControlInput1" Value="<?php echo $info["last_name"];?>" required>
           </div>

          <div class="mb-3">
           <label for="exampleFormControlInput1" class="form-label">E-mail</label>
           <input type="email" class="form-control" name = "email" id="exampleFormControlInput1" 
           Value="<?php echo $info["email"]; ?>" placeholder="name@example.com" required>
           </div>

           <div class="mb-3">
             <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
            <input type="text" class="form-control"  name = "phone_number" 
            Value="<?php echo $info["phone"]; ?>"id="exampleFormControlInput1" required>
            </div>

            <div class="mb-3">
             <label for="exampleFormControlInput1" class="form-label">Password</label>
             <input type="texts" class="form-control" name="password" id="exampleFormControlInput1" Value="<?php echo $info["password"]; ?>">
            </div>

            <center>
            <input type = "submit" name = "update" value = "Update" class ="btn btn-success btn-style1">
           </center>

    </form>
    </div>
</div>
</body>
</html>