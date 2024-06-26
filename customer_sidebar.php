   <!----- ASIDE  -------->
   <aside>
    <?php 
      $u_id =  $_SESSION['u_id'];
              include 'connect_db.php';
              $sql = "SELECT * FROM customers WHERE customer_id =$u_id ";
              $result = mysqli_query($con,$sql);
  
              $row = mysqli_fetch_assoc($result);
          ?>
    <h1 class = "dashboard-heading"><?php echo $row['first_name'] ?> Profile</h1>
    <div class = "dashboard-profile">
        <img class ="profile-img" src="./asset/images.png" alt="">
       </div>
       <hr>
    
    <div class="sidebar-list">
    <ul>
        <li>
            <a href="customer_view_account.php">My Account</a>
        </li>

        <li>
            <a href="booking_form.php">Booking</a>
        </li>

        <li>
            <a href="view_booking.php">View Booking</a>
        </li>

        <li>
            <a href="logout.php">Logout</a>
        </li>
    </ul>
    </div>
    </aside>
    <!----- ./ASIDE ------------->