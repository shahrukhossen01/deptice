<?php
$db=mysqli_connect("localhost","root","","ice");
echo "successfuly connect :)";
if(isset($_POST["submit"]))
{
$name=$_POST["name"];
$id=$_POST["id"];
$dept=$_POST["dept"];
$act=$_POST["act"];
$exp=$_POST["exp"];
$vision=$_POST["vision"];
$reason=$_POST["reason"];




$query="INSERT INTO clubmember (Name, ID, Department, Activities, Experiences,  Vision,  Reason)

VALUES('$name' ,'$id','$dept','$act','$exp','$vision','$reason')";

$result=mysqli_query($db,$query);

if($result=="1")  
{
  echo  "Successfuly Registration Complete :)";

}
else
{
  echo"somthing error";
} 
}
?>




<!DOCTYPE html>
<html>
<head>
  <title>Club Member &mdash; </title>
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

              <a href=https://www.facebook.com/shahruk.hossen//><span class="icon-facebook"></span></a>
            

              <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                class="icon-menu h3"></span></a>

            </div>
          </div>
         
        </div>
      </div>

    </header>




  <style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}


.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}


.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}


.container {
  padding: 16px;
}


.clearfix::after {
  content: "";
  clear: both;
  display: table;
}


@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
<body>

<form action="clubmember.php"  method="POST"  style="border:1px solid #ccc">
  <div class="container">
       <h1>Member Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>


    <h1>Club Member Registration</h1>
    <p>Please fill in this form to create a record own your</p>
    <hr>

    <label ><b>Full Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" id="name" required>


    <label ><b>ID</b></label>
    <input type="text" placeholder="Enter Id" name="id"   id="id"  required>

    <label ><b>Department</b></label>
    <input type="text" placeholder="Enter Department" name="dept" id="dept" required>

     <label ><b>Extra Curricular Activities</b></label>
    <input type="text" placeholder="Enter Your Activities" name="act" id="act" required>

    <label ><b>Previous Experiences</b></label>
    <input type="text" placeholder="Enter Your Experiences" name="exp"  id="exp"  required>

      <label><b>Vision Regarding The Club</b></label>
    <input type="text" placeholder="Enter Your Vision" name="vision"   id="vision" required>


    <label ><b>Reasons that You are Fit For The Club</b></label>
    <input type="text" placeholder="Enter Your Reason " name="reason"  id="reason" required>

    
   

    <div class="clearfix">
      
      <button type="submit" value="submit" name="submit" class="signupbtn">Sign Up </button>

      
   



            <a href="membershow.php" class="small btn btn-primary px-4 py-2 rounded-0"><span class="icon-users"></span> SHOW Record</a>
      
      
    </div>
  </div>
</form>







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