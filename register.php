<?php
$db=mysqli_connect("localhost","root","","ice");
echo "successfuly connect :)";
if(isset($_POST["submit"]))
{
$name=$_POST["name"];
$id=$_POST["id"];
$dept=$_POST["dept"];
$batch=$_POST["batch"];
$email=$_POST["email"];
$mob=$_POST["mobile"];
$add=$_POST["address"];




$query="INSERT INTO registration (Name, ID, Department, Batch, Email,  Mobile,  Address)

VALUES('$name' ,'$id','$dept','$batch','$email','$mob','$add')";

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
  <title>Conatct &mdash; </title>
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
            

             <a href="search.php" class="small btn btn-primary px-4 py-2 rounded-0"><span class="icon-users"></span> Search Info</a>
            <a href="register.php" class="small btn btn-primary px-4 py-2 rounded-0"><span class="icon-users"></span> Registration</a>

            <a href="show.php" class="small btn btn-primary px-4 py-2 rounded-0"><span class="icon-users"></span> SHOW Record</a>
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

<form action="register.php"  method="POST"  style="border:1px solid #ccc">
  <div class="container">
       <h1>Member Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>


    <h1>Student Registration</h1>
    <p>Please fill in this form to create a record own your</p>
    <hr>

    <label ><b>Full Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" id="name" required>


    <label ><b>ID</b></label>
    <input type="text" placeholder="Enter Id" name="id"   id="id"  required>

    <label ><b>Department</b></label>
    <input type="text" placeholder="Enter Department" name="dept" id="dept" required>

     <label ><b>Batch</b></label>
    <input type="text" placeholder="Enter Your Batch" name="batch" id="batch" required>

    <label ><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email"  id="email"  required>

      <label><b>Mobile</b></label>
    <input type="text" placeholder="Enter Mobile" name="mobile"   id="mobile" required>


    <label ><b>Address</b></label>
    <input type="text" placeholder="Enter Address" name="address"  id="address" required>

    
   

    <div class="clearfix">
      
      <button type="submit" value="submit" name="submit" class="signupbtn">Sign Up</button>
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