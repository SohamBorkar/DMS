
<?php
session_start();
include "conn.php";
//include "db_connect.php";
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
  <link href="../vendor/aos/aos.css" rel="stylesheet">
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between ">

      <h1 class="logo" style="font-size: 32px"><a href="/DMS/admin.php"><b>Polisys</b></a></h1>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="" style="font-size: 18px" href="/DMS/admin.php">Insert to DB</a></li>
          <li><a class="nav-link scrollto" style="font-size: 18px" href="police.php">Police</a></li>
          <li><a class="nav-link scrollto" style="font-size: 18px" href="criminal.php">Criminals</a></li>
          <li><a class="nav-link scrollto" style="font-size: 18px" href="case.php">Cases</a></li>
          <li><a class="nav-link scrollto" style="font-size: 18px" href="staff.php">Staff</a></li>
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
<script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="../assets/vendor/aos/aos.js"></script>
<script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>

<!-- Template Main JS File -->
<script src="../assets/js/main.js"></script>
<div style="margin-bottom: 85px;"><h2 class="text-center" style="margin-top: 70px;" >Add Case to DataBase</h2>
</div>

    
<div class="col-lg-8 mt-5 mt-lg-0 mx-auto" >

<form action="" method="post" role="form" class="">
  <div class="row gy-2 gx-md-3">
    <div class="form-group col-12" style="margin-bottom:18px">
      <label style="margin-bottom:5px">Enter Case ID</label>
      <input type="text" name="id" class="form-control" id="id" placeholder="Type Case ID" required>
    </div>
    <div class="form-group col-12" style="margin-bottom:18px">
      <label style="margin-bottom:5px">Enter Case Name</label>
      <input type="text" name="name" class="form-control"  id="case_name" placeholder="Type Case Name" required>
    </div>
    <div class="form-group col-12" style="margin-bottom:18px">
      <label style="margin-bottom:5px">Enter Associated Police ID</label>
      <input type="number" name="policeid" class="form-control" id="p_id" placeholder="Type Associated Police ID" required min="100">
    </div>
    <div class="form-group col-12" style="margin-bottom:18px">
      <label style="margin-bottom:5px">Enter Associated Criminal ID</label>
      <input type="number" name="criminalid" class="form-control" id="c_id" placeholder="Type Associated Criminal ID" required min="100">
    </div>
    <div class="form-group col-12">
      <label style="margin-bottom:5px">Enter Status of the Case  (0 and 1 for resolved and unresolved respectively)</label>
      <input type="number" name="status" class="form-control" id="c_status" placeholder="Type Status of Case as 0 for resolved and 1 for not" required value="1" min="0" max="1">
    </div>
    <div class="my-3 col-12">
      <!--<div class="loading">Loading</div> -->
      <div class="error-message"></div>
    </div>
    <div class="text-center col-12"><button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">Add</button></div>
  </div>
</form>
</div>
<?php
  error_reporting(0);

if (isset($_POST['submit'])) {
  $id = $_POST['id'];
  $name = $_POST['name'];
  $plsid = $_POST['policeid'];
  $criid = $_POST['criminalid'];
  $status = $_POST['status'];

  // Prepare the statement
  $stmt = $conn->prepare("INSERT INTO `case` (case_id, case_name, pid, cid, status) VALUES (?, ?, ?, ?, ?)");
  $stmt->bind_param("isiii", $id, $name, $plsid, $criid, $status);

  // Execute the statement
  $stmt->execute();
  $stmt->store_result();

  // Check if the statement was executed successfully
  if ($stmt->affected_rows > 0) {
    echo "<script> alert('Case Added Successfully');</script>";
  } else {
    echo "Error: " . $stmt->error;
  }

  // Close the statement and connection
  $stmt->close();
  $conn->close();
}
?>
    
</script>

</body>