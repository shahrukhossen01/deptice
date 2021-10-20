<?php
$db=mysqli_connect("localhost","root","","ice");
echo "successfuly connect :)"; 
if(isset($_POST["submit"]))
{
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$email=$_POST["email"];
$mobile=$_POST["mob"];
$sms=$_POST["msg"];



$query="INSERT INTO contact (FirstName, LastName, Email, Mobile, Message)

VALUES('$fname' ,'$lname','$email','$mobile','$sms')";

$result=mysqli_query($db,$query);

if($result=="1")
{
  echo "Thanks For Contact :)";
}
else
{
  echo"somthing error";
} 
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <title>Student Register &mdash;</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">
  <link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="css/style.css">



</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <div class="py-2 bg-light">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-9 d-none d-lg-block">
            
            <a href="contact.php" class="small mr-3"><span class="icon-envelope-o mr-2"></span>shahrukhossen@gmail.com</a> 
            <a href="contact.php" class="small mr-3"><span class="icon-envelope-o mr-2"></span>ibrahim96@gmail.com</a> 
            <a href="contact.php" class="small mr-3"><span class="icon-question-circle-o mr-2"></span> Have a questions?</a> 
          </div>
                    <div class="col-lg-3 text-right">
            <a href="register.php" class="small mr-3"><span class="icon-unlock-alt"></span> Log In</a>
            <a href="register.php" class="small btn btn-primary px-4 py-2 rounded-0"><span class="icon-users"></span> Register</a>
          </div>
        </div>
      </div>
    </div>

    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="d-flex align-items-center">
          <div class="site-logo">
            <a href="index.html" class="d-block">
              <img src="images/logo.jpg" alt="Image" class="img-fluid">
            </a>
          </div>
          <div class="mr-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active">
                  <a href="index.html" class="nav-link text-left">Home</a>
                </li>
                <li>
                  <a href="index.html #lecturer" class="nav-link text-left">Faculties</a>
                </li>

                 <li>
                  <a href="index.html #university" class="nav-link text-left">About Our University</a>
                </li>

                 <li>
                  <a href="index.html #new" class="nav-link text-left">Goal</a>
                </li>
               
               
                <li>
                    <a href="index.html #info" class="nav-link text-left">ICT Club</a>
                  </li>
                  <li>
                    <a href="index.html #course" class="nav-link text-left">Courses</a>
                  </li>

                  <li>
                    <a href="contact.php" class="nav-link text-left">Contact</a>
                  </li>
                  
              </ul>
              </ul>
            </nav>

          </div>
          
          <div class="ml-auto">
            <div class="social-wrap">
              <a href=https://www.facebook.com/bauet.ac.bd/><span class="icon-facebook"></span></a>
            

              <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                class="icon-menu h3"></span></a>
            </div>
          </div>
         
        </div>
      </div>

    </header>
    
    <form action="contact.php" method="POST">
    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
        <div class="container">
          <div class="row align-items-end">
            <div class="col-lg-7">
              <h2 class="mb-0">Contact</h2>
              <p>Send us Your Mail, we'll make sure You Never Miss a Thing!</p>
            </div>
          </div>
        </div>
      </div> 
    

    <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="index.html">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Contact</span>
      </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 form-group">
                    <label >First Name</label>
                    <input type="text" name="fname" id="fname" class="form-control form-control-lg" placeholder="First Name" required>
                </div>
                <div class="col-md-6 form-group">
                    <label >Last Name</label>
                    <input type="text" name="lname" id="lname" class="form-control form-control-lg" placeholder="Last Name" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="eaddress">Email Address</label>
                    <input type="text" name="email" id="eaddress" class="form-control form-control-lg" placeholder="Enter Email" required>
                </div>
                <div class="col-md-6 form-group">
                    <label for="tel">Tel. Number</label>
                    <input type="text" name="mob" id="tel" class="form-control form-control-lg" placeholder="Enter Tel. Number " required>
                </div> 
            </div>
            <div class="row">
                <div class="col-md-12 form-group">
                    <label >Message</label>
                    <textarea name="msg" id="message" cols="30" rows="10" class="form-control" placeholder="Enter Message" required ></textarea>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <input type="submit" name="submit" value="Send Message" class="btn btn-primary btn-lg px-5">
                </div>
            </div>
        </div>
    </div>
    </form>

   
      


  <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#51be78"/></svg></div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.mb.YTPlayer.min.js"></script>




  <script src="js/main.js"></script>

</body>

</html>