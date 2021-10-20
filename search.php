<?php
$db=mysqli_connect("localhost","root","","ice");
echo "Sucessfuly connected to database ";

if(isset($_POST["submit"]))
{   
  $id=$_POST["search"];
  
  $query="Select * from registration where ID='$id'";
  $result=mysqli_query($db,$query);
  $row=mysqli_fetch_assoc($result);

  $res=mysqli_num_rows($result); ?>



   <table border="1" class="table">
      <tr>
      <th>
        Name 


      </th>
      <th>
        ID


      </th>
      <th>
        Department


      </th>
      <th>
        Batch


      </th>
      <th>
        Email


      </th>
      <th>
        Mobile


      </th>
      <th>
        Address


      </th>

    </tr>

  
  
    <tr>
      <td>
         <?php echo $row['Name'] ;?>


      </td>
      <td>
        <?php echo $row['ID'];?>


      </td>
      <td>
        <?php echo $row['Department'];?>


      </td>
      <td>
        <?php echo $row['Batch'];?>


      </td>
      <td>
        <?php echo $row['Email'];?>


      </td>
      <td>
        <?php echo $row['Mobile'];?>


      </td>
      <td>
        <?php echo $row['Address'];?>


      </td>
      
    </tr> 

<?php

  }
  else {

echo ":)";

  }



  ?>

<!--End search section -->

<br>



<!DOCTYPE html>
<html>
<head>
  <title>Show Record &mdash; </title>
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


      <div class="container">
       <h1>Search Student Information</h1>
    <p>Please Enter Your ID</p>
    <hr>


    <h1>Search Student Information</h1>
    <p>Please Enter Your ID</p>
    <hr>
<br>
<br>


 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
</style>

<br>

<div class="topnav">

  <a href="" >Search Here </a>

  <div class="search-container">
    <form action="search.php" method="POST">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit" name="submit"> <i class="fa fa-search"></i></button>
    </form>
  </div>
</div>
<br>






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