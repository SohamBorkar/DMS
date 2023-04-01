<?php
// $result=0;
session_start();
include "db_connect.php";
if(isset($_POST['submit'])){
  $username=$_POST['username'];
  $password=$_POST['password'];
  $sql="SELECT * FROM `admintable` WHERE username='$username' and password='$password'";
  $query=mysqli_query($con,$sql);

  $row = mysqli_num_rows($query);
    if($row==1){
      echo"login succesful";
      $_SESSION['username']=$username;
      header('location:index.php');
    }
    else{
      echo"Soory, You are not Admin";
  
      header('location:admin.php');
    }
  }

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
          <li><a class="nav-link scrollto" style="font-size: 18px" href="assets/partials/police.php">Police</a></li>
          <li><a class="nav-link scrollto" style="font-size: 18px" href="assets/partials/criminal.php">Criminals</a></li>
          <li><a class="nav-link scrollto" style="font-size: 18px" href="assets/partials/case.php">Cases</a></li>
          <li><a class="nav-link scrollto" style="font-size: 18px" href="assets/partials/staff.php">Staff</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  </script>

  <h2>is the title for admin.php file</h2>


<!-- Vendor JS Files -->
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

<section id="about" class="about">
      <div class="container" data-aos="fade-up">     
      <h2 class="text-center">Welcome Admin to Polisys</h2>
      </div>
    </section>

</body>


<!-- INSERT INTO `s_case` (`case_id`, `case_name`, `asso_pid`, `asso_cid`, `status`, `dt`) VALUES ('5454', 'sdfsdf', '5454', '6565', '0', current_timestamp()); 

Moving table to other side:
ALTER TABLE `s_case` CHANGE `cid` `cid` INT(11) NULL DEFAULT NULL AFTER `pid`;
-->