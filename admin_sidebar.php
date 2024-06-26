<aside>
    <h1 class = "dashboard-heading"></h1>
    <div class = "dashboard-profile">
        <?php session_start();
        
      if( $_SESSION['u_id']){
    // printf($row['customer_id']);
    $u_id =  $_SESSION['u_id'];
    
    }
    $u_id =  $_SESSION['u_id'];
            include 'connect_db.php';
            $sql = "SELECT * FROM customers WHERE customer_id =$u_id ";
            $result = mysqli_query($con,$sql);

            $row = mysqli_fetch_assoc($result);
        ?>
        <img class ="profile-img" src="./asset/birds.jpg" alt="">
        <h3 style = "color: #ffffff"><?php echo $row['first_name'] ?></h3>
       </div>
       <hr>
    <div class="sidebar-list">
    <ul>
        <li>
            <a href="admin_view_booking.php">view Booking</a>
        </li>

        <li>
            <a href="admin_view_customer.php">view customer</a>
        </li>

        <li>
            <a href="report.php">Report</a>
        </li>

        <li>
            <a href="logout.php">Logout</a>
        </li>
    </ul>
    </div>
    </aside>

    <!----- ./ASIDE ------------->