<?php
session_start();
include "conn.php";
//include "db_connect.php";
  error_reporting(0);
?>

<?php  
$id = $_GET['id'];                                  // it should match with respective .php file from where data is coming
$query = "SELECT * FROM `criminal` WHERE cid = '$id'";    // 'case_id' after where word should match with name of column in table
$data = mysqli_query($conn, $query);

$row = $data->fetch_assoc();                        // check name of variable where query is executing in the respective .php file. Here in respective .php file, $data is used for query execution. So we decleared $row of respective .php file to retrive data of the executed query stored in $data
// above line is used to get data in format of array.   
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
          <li><a class="" style="font-size: 18px" href="/DMS/admin.php">Admin</a></li>
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
<div style="margin-bottom: 85px;"><h2 class="text-center" style="margin-top: 70px;" >Update Criminal to DataBase</h2>
</div>

<div class="col-lg-8 mt-5 mt-lg-0 mx-auto" >

<form action="" method="post" role="form" class="">
  <div class="row gy-2 gx-md-3">
    <div class="form-group col-12" style="margin-bottom:18px">
      <label style="margin-bottom:5px">Enter the ID of the Criminal</label>
      <input type="number" value="<?php echo $row['cid']; ?>" name="id" class="form-control" id="id" placeholder="Type Criminal ID" required>
    </div>
    <div class="form-group col-12" style="margin-bottom:18px">
      <label style="margin-bottom:5px">Enter the Name of the Criminal</label>
      <input type="text" value="<?php echo $row['name']; ?>" class="form-control" name="name" id="c_name" placeholder="Type Name of Criminal" required>
    </div>
    <div class="form-group col-12" style="margin-bottom:18px">
      <label style="margin-bottom:5px">Enter Date of Birth of the Criminal</label>
      <input type="date" value="<?php echo $row['dob']; ?>" class="form-control" name="c_dob" id="cri_dob" placeholder="Enter Date of Birth of Criminal" min="1900-01-01" max="2005-01-01" required>
    </div>
    <div class="form-group col-12" style="margin-bottom:18px">
      <label style="margin-bottom:5px">Enter the Name of the Crime/ Case that has been done by the Criminal</label>
      <input type="text" value="<?php echo $row['c_name']; ?>" class="form-control" name="casename" id="case_iname" placeholder="Type Name of Case/ Crime Committed by Criminal" required>
    </div>
    <div class="form-group col-12" style="margin-bottom:18px">
      <label style="margin-bottom:5px">Enter the Number of Crimes a Criminal has been done before</label>
      <input type="number" value="<?php echo $row['prev_crimes']; ?>" class="form-control" name="previous_crimes" id="p_crimes" placeholder="Type Number of Crimes Previously Committed" required min="0">
    </div>
    <div class="form-group col-12" style="margin-bottom:18px">
      <label style="margin-bottom:5px">Enter the Harm Level of the Criminal according to Crimes Previously Committed</label>
      <input type="number" value="<?php echo $row['harm_level']; ?>" class="form-control" name="harm_level" id="h_level" placeholder="Type Harm Level of Criminal" required min="0">
    </div>
    <div class="form-group col-12">
      <label style="margin-bottom:5px">Enter the Associated Case ID</label>
      <input type="number" value="<?php echo $row['case_id']; ?>" class="form-control" name="case_id" id="c_id" placeholder="Type Associated Case ID" required min="100">
    </div>
    <div class="my-3 col-12">
      <!--<div class="loading">Loading</div> -->
      <div class="error-message"></div>
    </div>
    <div class="text-center col-12"><button type="submit" class="btn btn-primary btn-lg btn-block" name="update">Update Criminal</button></div>
  </div>
</form>
</div>

<?php
  error_reporting(0);

if (isset($_POST['update'])) {
  $id = $_POST['id'];
  $name = $_POST['name'];
  $dob = $_POST['c_dob'];
  $case_n = $_POST['casename'];
  $previous_c = $_POST['previous_crimes'];
  $harm_l = $_POST['harm_level'];
  $case_id = $_POST['case_id'];

  // Prepare the statement
  $stmt = $conn->prepare("UPDATE `criminal` SET `name`=?, `dob`=?, `c_name`=?, `prev_crimes`=?, `harm_level`=?, `case_id`=? WHERE `cid`='$id'");
  $stmt->bind_param("ssssii", $name, $dob, $case_n, $previous_c, $harm_l, $case_id);

  // Execute the statement
  $stmt->execute();
  $stmt->store_result();

  // Check if the statement was executed successfully
  if ($stmt->affected_rows > 0) {
    echo "<script> alert('Updated Criminal Successfully');</script>";
    ?>
    <meta http-equiv="refresh"content = "0; url=http://localhost/DMS/assets/partials/criminal.php"/>
    <?php  
    } 
    else {
    echo "Error: ". $stmt->error;
    echo "<script> alert('Failed to Update Criminal');</script>";
  }

  // Close the statement and connection
  $stmt->close();
  $conn->close();
}
?>


<br>
<br>
</script>

</body>