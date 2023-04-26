
<?php
session_start();
//include "assets/partials/conn.php";
include "db_connect.php";
  error_reporting(0);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Add staff Page</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

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
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-9 text-center">
          <h1>Police Station Managment System</h1>
          <h2>Sadrakshanaya Khalnighrahanay</h2>
        </div>
      </div>
      <div class="text-center">
        <a href="login.php" class="btn-get-started scrollto">Get Started</a>
      </div>
      </div>
    </div>

    <div class="container d-flex align-items-center justify-content-between ">

      <h1 class="logo" style="font-size: 32px"><a href="admin.php"><b>Polisys</b></a></h1>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="" style="font-size: 18px" href="admin.php">Insert to DB</a></li>
          <li><a class="nav-link scrollto" style="font-size: 18px" href="assets/partials/police.php">Police</a></li>
          <li><a class="nav-link scrollto" style="font-size: 18px" href="assets/partials/criminal.php">Criminals</a></li>
          <li><a class="nav-link scrollto" style="font-size: 18px" href="assets/partials/case.php">Cases</a></li>
          <li><a class="nav-link scrollto" style="font-size: 18px" href="assets/partials/staff.php">Staff</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>


    <div class="container d-flex align-items-center justify-content-between ">

      <h1 class="logo" style="font-size: 32px"><a href="admin.php"><b>Polisys</b></a></h1>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="" style="font-size: 18px" href="admin.php">Insert to DB</a></li>
          <li><a class="nav-link scrollto" style="font-size: 18px" href="assets/partials/police.php">Police</a></li>
          <li><a class="nav-link scrollto" style="font-size: 18px" href="assets/partials/criminal.php">Criminals</a></li>
          <li><a class="nav-link scrollto" style="font-size: 18px" href="assets/partials/case.php">Cases</a></li>
          <li><a class="nav-link scrollto" style="font-size: 18px" href="assets/partials/staff.php">Staff</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->  

<header id="add option">
  <div class="align-items-center">
  <select class="form-select" aria-label="Default select example">
  <option selected>Open this select menu</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
  </div>

  </section><!-- End Hero -->



  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between ">

      <h1 class="logo" style="font-size: 32px"><a href="admin.php"><b>Polisys</b></a></h1>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="" style="font-size: 18px" href="admin.php">Insert to DB</a></li>
          <li><a class="nav-link scrollto" style="font-size: 18px" href="assets/partials/police.php">Police</a></li>
          <li><a class="nav-link scrollto" style="font-size: 18px" href="assets/partials/criminal.php">Criminals</a></li>
          <li><a class="nav-link scrollto" style="font-size: 18px" href="assets/partials/case.php">Cases</a></li>
          <li><a class="nav-link scrollto" style="font-size: 18px" href="assets/partials/staff.php">Staff</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->  

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
<div style="margin-bottom: 85px;"><h2 class="text-center" style="margin-top: 70px;" >Add Staff to DataBase</h2>
</div>

<div class="col-lg-8 mt-5 mt-lg-0 text-center mx-auto">
  <form action="" method="post" role="form" class="">

    <div class="row gy-2 gx-md-3">

      <div class="form-group col-12" style="margin-bottom:10px">
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">Enter ID of the Police</span>
          </div>
          <input type="number" class="form-control" name="idpolice" id="id" placeholder="Type Police ID" required>
        </div>
      </div>

      <div class="form-group col-12" style="margin-bottom:10px">
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">Enter Name of the Police</span>
          </div>
          <input type="text" class="form-control" name="namepolice" id="police_name" placeholder="Type Name of Police" required>
        </div>
      </div>

      <div class="form-group col-12" style="margin-bottom:10px">
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">Enter Date of Birth the Police</span>
          </div>
          <input type="date" class="form-control" name="datepolice" id="p_date" placeholder="Enter Date of Birth of Police" required>
        </div>
      </div>


      <div class="form-group col-12" style="margin-bottom:10px">
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">Enter Rank of the Police</span>
          </div>
          <input type="number" class="form-control" name="rankingpolice" id="p_rank" placeholder="Type Rank of Police" required min="0">
        </div>
      </div>

      <div class="form-group col-12" style="margin-bottom:10px">
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">Enter Associated Case ID for the Police</span>
          </div>
          <input type="number" class="form-control" name="caseidpolice" id="c_id" placeholder="Type Associated Case ID" required >
        </div>
      </div>
      
      <div class="my-3 col-12">
        <!--<div class="loading">Loading</div> -->
        <div class="error-message"></div>
      </div>
      <div class="text-center col-12"><button type="submit" name="submit" class="btn btn-primary">Add</button></div>
    </div>
  </form>
</div>




</body>

<!-- 
INSERT INTO `s_case` (`case_id`, `case_name`, `asso_pid`, `asso_cid`, `status`, `dt`) VALUES ('5454', 'sdfsdf', '5454', '6565', '0', current_timestamp()); 

Moving table to other side:
ALTER TABLE `s_case` CHANGE `cid` `cid` INT(11) NULL DEFAULT NULL AFTER `pid`;
-->