<!doctype html>
<html lang="en">
  <head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <title>Maid For You | Search</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  <!-- Icon Font Css -->
  <link rel="stylesheet" href="plugins/themify/css/themify-icons.css">
  <link rel="stylesheet" href="plugins/fontawesome/css/all.css">
  <link rel="stylesheet" href="plugins/magnific-popup/dist/magnific-popup.css">
  <!-- Owl Carousel CSS -->
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">
  
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- Main Stylesheet -->
  <!--<link rel="stylesheet" href="css/style.css">-->
  <!--<link rel="stylesheet" href="css/style.css?v=?php echo time(); ?>">-->
  <style>
  <?php include "css/style.css" ?>
  </style>
    
</head>

<body> 
<!-- Header Start --> 

 <header class="navigation">

  <nav class="navbar navbar-expand-lg  py-4" id="navbar">
    <div class="container">
      <img  src="images/home/logo.png" width="50px" height="50px">
      <a class="ash" href="index.html">
        Maid<span> For </span>You
      </a>

      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
      <span class="fa fa-bars"></span>
      </button>
    
      <div class="collapse navbar-collapse text-center" id="navbarsExample09">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About Us</a>
          <ul class="dropdown-menu" aria-labelledby="dropdown03">
            <li><a class="dropdown-item" href="about.html">Our company</a></li>
            
          </ul>
        </li>
         <li class="nav-item"><a class="nav-link" href="helpersignup.php">Need a job?</a></li>
         <li class="nav-item"><a class="nav-link" href="project.html">Customer Reviews</a></li>
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Book Now!</a>
          <ul class="dropdown-menu" aria-labelledby="dropdown05">
            <li><a class="dropdown-item" href="login.php">Login</a></li>
            <li><a class="dropdown-item" href="signup.php">Sign Up</a></li>

            
          </ul>
        </li>
         </ul>

      <form class="form-lg-inline my-2 my-md-0 ml-lg-4 text-center">
        <a href="contact.html" class="btn btn-solid-border btn-round-full">Contact Us</a>
      </form>
      </div>
    </div>
  </nav>
 </header>


<!-- Header Close --> 
<!--form start-->
 <section class="contact-form-wrap section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12">
                 <form id="contact-form" class="contact__form" method="POST" action="search.php">
                    
                    <h3 class="text-md mb-4">Select City</h3>
                    <div class="form-group">
                        <select name="city" class="form-control" placeholder="Enter city" required>
                        	<option value="none">--select--</option>
                        	<option value="delhi">Delhi</option>
                        	<option value="mumbai">Mumbai</option>
                        	<option value="bangalore">Bangalore</option>
                        	<option value="pune">Pune</option>
                        	<option value="hyderabad">Hyderabad</option>
                        	<option value="jaipur">Jaipur</option>
                        	<option value="chennai">Chennai</option>
                        	<option value="kolkata">Kolkata</option>
                        	<option value="lucknow">Lucknow</option>
                        </select>
                    </div>

                    <h3 class="text-md mb-4">Select Helper Profession</h3>
                    <div class="form-group">
                        <select name="profession" class="form-control" placeholder="Enter profession required" required>
                        	<option value="none">--select--</option>
                        	<option value="cook">Cook</option>
                        	<option value="babysitter">Babysitter</option>
                        	<option value="maid">Maid</option>
                        	<option value="gardener">Gardener</option>
                        	<option value="eldercare">Elder Care</option>
                        	<option value="plumber">Plumber</option>
                          <option value="driver">Driver</option>
                        </select>
                    </div>

                    <h3 class="text-md mb-4">Select Gender</h3>
                    <div class="form-group">
                        <select name="gender" class="form-control" placeholder="Enter Gender" required>
                        	<option value="none">--select--</option>
                        	<option value="male">Male</option>
                        	<option value="female">Female</option>
                        	<option value="unbiased">Unbiased</option>
                        </select>
                    </div>
                    <br>
                    <!--<h2><button class="btn btn-main" name="submit" type="submit"></button></h2>-->
                      <input class="btn btn-main" onclick = "search.php" type="submit" name="submit" value="Search">
                </form>
            </div>
          
        </div>
    </div>

    <div style="margin-top:50px"></div>
    
 </section>
<!--form closed-->

<!--PHP Started-->
<?php
//echo "Hello";
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    include("connection.php");
    //echo "Hello";
    $city = $_POST['city'];
    $helproff = $_POST['profession'];
    $gender = $_POST['gender'];

    $query = "SELECT LABOURNAME, GENDER, CITY, WORKCATEGORY, COSTPERDAY, COSTPERMONTH, PHONENO FROM LABOUR_DETAILS WHERE CITY = '$city' AND WORKCATEGORY = '$helproff' AND GENDER = '$gender'";

    $data = mysqli_query($conn, $query);


    if($data)
    {
      $num = mysqli_num_rows($data);
      //echo "<h3>There are </h3>"."<h3>$num<h3/>"."<h3> numbers of worker in this area</h3>";

      if($num > 0)
      {
        while($num--)
        {
          $row = mysqli_fetch_assoc($data);
          echo "<br>";
          echo "<div style='margin-left:80px'>".$row['LABOURNAME']."</div>";
          //echo "<br>";
          echo "<div style='margin-left:80px'>Gender: ".$row['GENDER']."</div>";
          //echo "<br>";
          echo "<div style='margin-left:80px'>".$row['CITY']."</div>";
          //echo "<br>";
          echo "<div style='margin-left:80px'>Wroker Type: ".$row['WORKCATEGORY']."</div>";
          //echo "<br>";
          echo "<div style='margin-left:80px'>Cost/Day: ".$row['COSTPERDAY']."  Cost/Month: ".$row['COSTPERMONTH']."</div>";
          //echo "<br>";
          echo "<div style='margin-left:80px'>PhoneNo: ".$row['PHONENO']."</div>";
          echo "<br>";
        }
      }
    }

    else
      echo "ConnectionFailed".mysqli_error($data);

}
?>

<!-- footer Start -->
 <div style="margin-bottom:50px"></div>
 <footer class="footer section">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="widget">
          <h4 class="text-capitalize mb-4">Company</h4>

          <ul class="list-unstyled footer-menu lh-35">
            <li><a href="#">Terms & Conditions</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Support</a></li>
            <li><a href="#">FAQ</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="widget">
          <h4 class="text-capitalize mb-4">Quick Links</h4>

          <ul class="list-unstyled footer-menu lh-35">
            <li><a href="about.html">About</a></li>
            <li><a href="login.php">Login</a></li>
            
            <li><a href="contact.html">Contact</a></li>
            <li><a href="project.html">Customer Reviews</a></li>
          </ul>
        </div>
      </div>
      

      <div class="col-lg-4 ml-auto col-sm-6">
        <div class="widget">
          <div class="logo mb-4">
            <h3>Maid<span> For </span>You</h3>
          </div>
          <h6><a href="https://www.google.com" >Support@maidforyou.com</a></h6>
          <a href="https://www.google.com"><span class="text-color h4">+91 9321456709</span></a>
        </div>
      </div>
    </div>
    
    <div class="footer-btm pt-4">
      <div class="row">
        <div class="col-lg-12"><hr>
          <div class="copyright">
             A Website Made With  <span class="text-color">Love</span> by <a href="index.html" target="_blank">Arjit, Ashna and Siddhesh</a>
          </div>
        </div>
        
      </div>
    </div>
  </div>
 </footer>



 <!-- Main jQuery -->
    <script src="plugins/jquery/jquery.js"></script>
    <script src="js/contact.js"></script>
    <!-- Bootstrap 4.3.1 -->
    <script src="plugins/bootstrap/js/popper.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
   <!--  Magnific Popup-->
    <script src="plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <!-- Slick Slider -->
    <script src="plugins/slick-carousel/slick/slick.min.js"></script>
    <!-- Counterup -->
    <script src="plugins/counterup/jquery.waypoints.min.js"></script>
    <script src="plugins/counterup/jquery.counterup.min.js"></script>

    <!-- Google Map -->
    <script src="plugins/google-map/map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>    
    
    <script src="js/script.js"></script>

  </body>
  </html>

  