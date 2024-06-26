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
  <h1>REGISTER NOW!</h1>
    <form action="signup_check.php" method = "POST">
    <h2>Sign Up</h2>
           <div class="mb-3">
           <label for="exampleFormControlInput1" class="form-label">First Name</label>
           <input type="text" class="form-control"  name ="first_name" id="exampleFormControlInput1" autoComplete = "off" required>
           </div>

           <div class="mb-3">
           <label for="exampleFormControlInput1" class="form-label">Last Name</label>
           <input type="text" class="form-control"  name ="last_name" id="exampleFormControlInput1" autoComplete = "off" required>
           </div>

          <div class="mb-3">
           <label for="exampleFormControlInput1" class="form-label">E-mail</label>
           <input type="email" class="form-control" name = "email" id="exampleFormControlInput1" 
           autoComplete = "off" placeholder="name@example.com" required>
           </div>

           <div class="mb-3">
             <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
            <input type="text" class="form-control"  name = "phone_number" 
            autoComplete = "off" id="exampleFormControlInput1" required>
            </div>

            <div class="mb-3">
             <label for="exampleFormControlInput1" class="form-label">Password</label>
             <input type="password" class="form-control" name="password" id="exampleFormControlInput1" autoComplete = "off">
            </div>

            <center>
            <input type = "submit" name = "submit" value = "Register" class ="btn btn-success btn-style1">
           </center>

    </form>
    </div>
</div>
</body>
</html>