<?php
// $result=0;
session_start();
include "db_connect.php";

// if(isset($_POST['submit'])){
//       //$username=$_POST['username'];
//       //$password=$_POST['password'];
//       //$sql="SELECT * FROM `admintable` WHERE username='$username' and password='$password'";
//       //$query=mysqli_query($conn,$sql);

//       //$row = mysqli_num_rows($query);
//     if($row==1){
//       echo"login succesful";
//       $_SESSION['username']=$username;
//       header('location:index.php');
//     }
//     else{
//       echo"<script>Sorry, You are not Admin</script>";
  
//       header('location:admin.php');
//     }
//   }
  error_reporting(0);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin Page</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between ">

      <h1 class="logo" style="font-size: 32px"><a href="admin.php"><b>Polisys</b></a></h1>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="" style="font-size: 18px" href="admin.php">Admin</a></li>
          <li><a class="nav-link scrollto" style="font-size: 18px" href="assets/partials/police.php">Police</a></li>
          <li><a class="nav-link scrollto" style="font-size: 18px" href="assets/partials/criminal.php">Criminals</a></li>
          <li><a class="nav-link scrollto" style="font-size: 18px" href="assets/partials/case.php">Cases</a></li>
          <li><a class="nav-link scrollto" style="font-size: 18px" href="assets/partials/staff.php">Staff</a></li>
          <li><a class="nav-link scrollto" style="font-size: 18px" href="../DMS/login.php">Log Out</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->  
  </script>

<header id="add option">
  <div class="align-items-center">
  <select class="form-select" aria-label="Default select example">
  <option selected>Open this select menu</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
  </div>
</header>

<!-- Vendor JS Files -->
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

<h2 class="text-center" style="margin-top: 70px;" style="margin-bottom: 10dp;">Welcome Admin to Polisys</h2>

<h4 class="text-center" style="margin-top: 50px; margin-bottom: 1px;">What to add in DataBase :</h4>

<section class="my-1" style="margin-top:1px">
  <div class="col-lg-8 mt-5 mt-lg-0 text-center mx-auto" style="margin-bottom: 15px;">
    <a href="assets/partials/addpolice.php" class="btn btn-primary btn-lg btn-block">Add Police to DataBase</a>
  </div>

  <div class="col-lg-8 mt-5 mt-lg-0 text-center mx-auto" style="margin-bottom: 15px;">
    <a href="assets/partials/addcriminal.php" class="btn btn-primary btn-lg btn-block">Add Criminal to DataBase</a>
  </div>

  <div class="col-lg-8 mt-5 mt-lg-0 text-center mx-auto" style="margin-bottom: 15px;">
    <a href="assets/partials/addcase.php" class="btn btn-primary btn-lg btn-block">Add Cases to DataBase</a>
  </div>

  <div class="col-lg-8 mt-5 mt-lg-0 text-center mx-auto" style="margin-bottom: 15px;">
    <a href="assets/partials/addstaff.php" class="btn btn-primary btn-lg btn-block">Add Staff to DataBase</a>
  </div>
</section>

 <!-- Vendor JS Files -->
 <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


</body>

<!-- 
INSERT INTO `s_case` (`case_id`, `case_name`, `asso_pid`, `asso_cid`, `status`, `dt`) VALUES ('5454', 'sdfsdf', '5454', '6565', '0', current_timestamp()); 

Moving table to other side:
ALTER TABLE `s_case` CHANGE `cid` `cid` INT(11) NULL DEFAULT NULL AFTER `pid`;
-->