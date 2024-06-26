<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pande Game Reserve</title>
    <link rel= "stylesheet" href = "./styles.css">
    <link rel = "stylesheet" href = "./bootstrap-5.3.1-dist/css/bootstrap.css">
    <link rel = "stylesheet" href = "./bootstrap-5.3.1-dist/js/bootstrap.js">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" 
     crossorigin="anonymous">
     <!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <style>
        .img-size{
            height: 500px;
            max-width: 100%;
            overflow: hidden;
        }
        .img-size img{
            width: 100%;
            height: 100%;
            object-fit: cover;
            transform: scale(0.8);
        }
        .u-text{
    padding-top: 50px;
    color: #0074E4;
  }
  .section-img{
    overflow: hidden;
    display: block;
    margin-left: 0;
    box-shadow: 0px 4px 6px rgba(0,0,0,0.1);
    width: 100%;
    height: 305px;
    opacity: 0.5;
  }
  .section-img:hover{
    opacity: 1.0;
  }
  .section-img img{
    width: 100%;
    height: 100%;
    object-fit: cover;
    transform: scale(0.8);
   
  }
  .item_over_img{
    position: relative;
    text-align: center;
    color: white;
  }
  .center{
    position: absolute;
    top: 50%;
    left: 30%;
  }
  .footer1{
    position: relative;
    background-color: black;
    color: white;
    width: 100%;
    left: 0;
    bottom: 0;
    text-align: center;
  }
  .footet-text{
    font-size: 10px;
    text-align: center;
  }
  .footer-text1{
    font-size: 12px;
    text-align: left;
    display: block;
    padding: 5px;
  }
  .footer-text2{
    font-size: 15px;
    text-align: left;
    display: block;
    padding: 5px;
  }
  .footer-header{
    margin-top: 20px;
  }
  /*style all social media icons*/
  .fa{
    padding: 3px;
    font-size: 20px;
    text-decoration: none;
    text-align: center;
  }
  .fa1{
    color: white;
  }
  .fa:hover {
  opacity: 0.7;
}
.contact-icon{
  display: inline-block;
  color: white;
  text-decoration: none;
}
.p-1{
  color: #fff;
  font-family: 500;
}
    </style>
</head>
<body>

<!-------------- container ------------>
<!-- <div class="container">
<div class="row align-item-center">
    <div class="col-md-2">
        <img src="./asset/logo.jpg" alt="">
    </div>
    <div class="col-lg-8">
        <div class="text-center header-info">
        <h3>The united Republic of Tanzania</h3>
        <h2 class = "text-info">Pande Game Reserve </h2>
        </div>
        </div>
        <div class="col-md-2">
            <img src="./asset/tawa.png"  src="" alt="">
        
        </div>
        
</div>
</div> -->
<!-----   ./container  -------------------->

<!---- include navbar ------------>
    <?php
    include('./navbar.php');
    ?>

    <!------------ slide show --------------->
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
    <img src="./asset/crater22.jpeg" class="d-block w-100 img-size "  alt="...">
    <div class="carousel-caption d-none d-md-block">
        <h3>Mission</h3>
        <p class = "p-1">Some representative placeholder content for the second slide.</p>
      </div>

    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="./asset/people.jpeg" class="d-block w-100 img-size" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Mission</h5>
        <p class = "p-1">Some representative placeholder content for the second slide.</p>
      </div>

    </div>
    <div class="carousel-item">
      <img src="./asset/simba.jpg" class="d-block w-100 img-size" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h3>Vission</h3>
        <p class = "p-1">Some representative placeholder content for the second slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> 
    </div>
<!------ ./slide show ---------------->

<!----- container fluid -------------->
    <div class="container-fluid ">
        <div class="row">
            <div class="col-md-6 margin-box g-5">
                <img src="./asset/people.jpeg" class = "img-style" alt="">
            </div>
            <div class="col-md-6 shadow-box">
                <h2 class = "u-text">Welcome To Pande Game Reserve</h2>
                <p class = "p-text">Welcome to our pande game reserve! We are ready to welcome you
                    to an exciting journey to see the wild animals and enjoy the beauty of nature.
                    We will ensure your experincence is unique and educational.You are most welcome.</p>

                 <div class="d-flex justify-content-center my-2">
                 <a href="./index.php" class = "btn btn-primary">Learn More</a>
                 </div>
                 
            </div>
        </div>
    </div>
    <!----------- ./container fluid ---------->

    <!----- container fluid -------------->
    <div class="container-fluid ">
        <div class="row">
        <div class="col-md-6 shadow-box">
                <h2 class = "u-text">Welcome To Pande Game Reserve</h2>
                <p class = "p-text">Pande Game Reserve
A reserves that allow you to escape town to connect with nature and rejuvenate. 
Be it camping or day visit our team is ready for you..</p>

                 <div class="d-flex justify-content-center my-2">
                 <a href="./index.php" class = "btn btn-success">Learn More</a>
                 </div>
                
                 
            </div>
            <div class="col-md-6 margin-box">
                <video controls width = "640" height = "360" src="./asset/pande.mp4"></video>
            </div>
            
        </div>
    </div>
    <!----------- ./container fluid ---------->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 g-5">
        <h2 class = "u-text1 text-info">About Pande Game Reserve</h2>
          <p class = "p-text">Pande is the smallest Game Reserve in Tanzania covering an area of 15.39 square
             kilometers in Kinondoni and Ubungo Districts in Dar es Salaam City. The Reserve 
             lies on the edge of the City, and is surrounded by five villages namely Msumi, 
             Msakuzi, Mabwe Pande, Mpiji Magoe and Mbopo; approximately 45 km Northwest from
              City centre and 16 km from the Indian Ocean at an altitude of 80m – 186 above
               sea level (60 40’ 32”S - 60 44’ 10”S, 390 04’ 10”E – 390 05’ 40”E).</p>
        </div>
        <div class="col-lg-6 g-5">
        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3962.690570961171!2d39.07962017499426!3d-6.685198893310092!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1spande%20game%20reserve!5e0!3m2!1sen!2stz!4v1691597310489!5m2!1sen!2stz"
         width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  
        </div>
    </div>
</div>
<!---- ./container-fluid --------------->

<!----- section image ------------->
<section >
 <div class="container-fluid item_over_img">
  <img class = "section-img" src="https://www.thegef.org/sites/default/files/styles/banner_image/public/2022-03/forests-1440x655.jpg?h=4e9a1ef8&itok=iluV2kRB" alt="forest">
  <div class="center">
    <h2>Sign Up Now!</h2>
    <p>Welcome to our game reserve now, click the button below to create your booking.</p>
    <p><a href="signup_form.php" class = "btn btn-primary">Signup Now</a></p>
  </div>
 </div>
</section>
<!---- ./section image-------->

<!--- footer section -------------->
<section>
<div class="footer1">
  <div class="container">
    <div class="row">
      <!---- col 1  ----------->
      <div class="col-sm-4">
        <h6 class = "footer-header g-5">ABOUT PANDE GAME RESERVE</h6>
        <p class="footer-text1">Pande Game Reserve
         allow you to escape town to connect with nature and rejuvenate. 
        Be it camping or day visit our team is ready for you.</p>
      </div>
      <!-- col 1 ------------->

      <!---- col 2 ----->
      <div class="col-sm-4">
        <h6 class = "footer-header g-5">CONTACT US</h6>
        <a href="#" class="fa fa-home fa1"><span class = "contact-icon footer-text1">  Dar es salaam</span>  </a><br>
        <a href="#" class="fa fa-phone fa1 "><span class = "contact-icon footer-text1">  +255784678</span></a><br>
        <a href="#" class=" fa fa-fax fa1"><span class = "contact-icon footer-text1">   +1278946674</span></a><br>
       
      </div>
      <!-------- ./col 2 ------------>

          <!---- col 3 ----->
     <div class="col-sm-4">
        <h6 class = "footer-header g-5">WRITE TO US</h6>
        <a href="#" class="fa fa-commenting fa1"><span class = "contact-icon footer-text2">Feedback</span></a><br>
        <a href="#" class="fa fa-shopping-cart fa1"><span class = "contact-icon footer-text2">
             Booking status</span></a><br>
        <a href="#" class="fa fa-newspaper-o fa1"><span class = "contact-icon footer-text2">  
            Join our newsletter</span></a>  
      </div>
      <!-------- ./col 3 ------------>
    </div>
  </div>
  <hr>
  <!-- Add font awesome icons -->
<a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-instagram"></a>
  <p class = "footet-text">&copy;2023:Game Changers</p>
</div>
</section>
<!------------ ./footer -------------->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
      crossorigin="anonymous"></script>
</body>
</html>