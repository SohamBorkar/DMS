<?php
// $result=0;
session_start();
include "db_connect.php";
if(isset($_POST['submit'])){
  //$username=$_POST['username'];
  //$password=$_POST['password'];
  //$sql="SELECT * FROM `admintable` WHERE username='$username' and password='$password'";
  //$query=mysqli_query($conn,$sql);

  //$row = mysqli_num_rows($query);
    if($row==1){
      echo"login succesful";
      $_SESSION['username']=$username;
      header('location:index.php');
    }
    else{
      echo"Sorry, You are not Admin";
  
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

<h2 class="text-center" style="margin-top: 70px;" style="margin-bottom: 1dp;">Welcome Admin to Polisys</h2>


<section id="choose" class="choose" >
  <div class="container" data-aos="fade-up">     
  <select class="form-select" aria-label="select" style="height: 50px">
      <option selected style="text-align: center;">Choose to add data in Database</option>
      <option value="1" style="text-align: center;">Case</option>
      <option value="2" style="text-align: center;">Police</option>
      <option value="3" style="text-align: center;">Criminal</option>
      <option value="4" style="text-align: center;">Staff</option>
</select>
  </div>
</section>

<p id="w"></p>  <!-- Here we keep things to print on screen. this paragraph to print will be changed accordingly below to police, criminal, etc. -->
<script>
	const select = document.getElementById("choose");
    const text = document.getElementById("w");

    const val = select.value;
    select.addEventListener("change", (e)=>{
    	if(e.target.value == "1"){
    	text.innerHTML = `
      <div class="col-lg-8 mt-5 mt-lg-0 text-center" >

<form action="" method="post" role="form" class="">
  <div class="row gy-2 gx-md-3">
    <div class="form-group col-12">
      <input type="text" name="id" class="form-control" id="id" placeholder="Type Case ID" required>
    </div>
    <div class="form-group col-12">
      <input type="text" class="form-control" name="name" id="case_name" placeholder="Type Case Name" required>
    </div>
    <div class="form-group col-12">
      <input type="number" class="form-control" name="policeid" id="p_id" placeholder="Type Associated Police ID" required min="100">
    </div>
    <div class="form-group col-12">
      <input type="number" class="form-control" name="criminalid" id="c_id" placeholder="Type Associated Criminal ID" required min="100">
    </div>
    <div class="form-group col-12">
      <input type="number" class="form-control" name="status" id="c_status" placeholder="Type Status of Case as 0 for resolved and 1 for not" required value="1" min="0" max="1">
    </div>
    <div class="my-3 col-12">
      <!--<div class="loading">Loading</div> -->
      <div class="error-message"></div>
      <div class="sent-message">Added Successfully</div>
    </div>
    <div class="text-center col-12"><button type="submit" class="btn btn-primary">Add</button></div>
  </div>
</form>
</div>`;
       }
       if(e.target.value == "2"){
    	text.innerHTML = `
      <div class="col-lg-8 mt-5 mt-lg-0 text-center" >

<form action="" method="post" role="form" class="">
  <div class="row gy-2 gx-md-3">
    <div class="form-group col-12">
      <input type="number" name="id" class="form-control" id="id" placeholder="Type Police ID" required>
    </div>
    <div class="form-group col-12">
      <input type="text" class="form-control" name="name" id="police_name" placeholder="Type Name of Police" required>
    </div>
    <div class="form-group col-12">
      <input type="text" class="form-control" name="policepost" id="p_post" placeholder="Type Post of Police">
    </div>
    <div class="form-group col-12">
      <input type="date" class="form-control" name="date" id="c_date" placeholder="Enter Date of Birth of Police" required>
    </div>
    <div class="form-group col-12">
      <input type="number" class="form-control" name="ranking" id="c_rank" placeholder="Type Rank of Police" required min="0">
    </div>
    <div class="form-group col-12">
      <input type="number" class="form-control" name="ranking" id="c_rank" placeholder="Type Associated Case ID" required >
    </div>
    <div class="my-3 col-12">
      <!--<div class="loading">Loading</div> -->
      <div class="error-message"></div>
      <div class="sent-message">Added Successfully</div>
    </div>
    <div class="text-center col-12"><button type="submit" class="btn btn-primary">Add</button></div>
  </div>
</form>
</div>`;
       }
       if(e.target.value == "3"){
    	text.innerHTML = `
      <div class="col-lg-8 mt-5 mt-lg-0 text-center" >

<form action="" method="post" role="form" class="">
  <div class="row gy-2 gx-md-3">
    <div class="form-group col-12">
      <input type="number" name="id" class="form-control" id="id" placeholder="Type Criminal ID" required>
    </div>
    <div class="form-group col-12">
      <input type="text" class="form-control" name="name" id="c_name" placeholder="Type Name of Criminal" required>
    </div>
    <div class="form-group col-12">
      <input type="date" class="form-control" name="c_dob" id="c_dob" placeholder="Enter Date of Birth of Criminal" required min="100">
    </div>
    <div class="form-group col-12">
      <input type="text" class="form-control" name="casename" id="case_iname" placeholder="Type Name of Case/ Crime Committed by Criminal" required>
    </div>
    <div class="form-group col-12">
      <input type="number" class="form-control" name="previous_crimes" id="p_crimes" placeholder="Type Number of Crimes Previously Committed" required min="0">
    </div>
    <div class="form-group col-12">
      <input type="number" class="form-control" name="harm_level" id="h_level" placeholder="Type Harm Level of Criminel" required min="0">
    </div>
    <div class="form-group col-12">
        <input type="number" class="form-control" name="case_id" id="c_id" placeholder="Type Associated Case ID" required min="100">
    </div>
    <div class="my-3 col-12">
      <!--<div class="loading">Loading</div> -->
      <div class="error-message"></div>
      <div class="sent-message">Added Successfully</div>
    </div>
    <div class="text-center col-12"><button type="submit" class="btn btn-primary" name="submit">Add</button></div>
  </div>
</form>
</div>
<?php
if (isset($_POST['submit'])) {
  $id = $_POST['id'];
  $name = $_POST['name'];
  $dob = $_POST['c_dob'];
  $case_n = $_POST['casename'];
  $previous_c = $_POST['previous_crimes'];
  $harm_l = $_POST['harm_level'];
  $case_id = $_POST['case_id'];

  // Prepare the statement
  $stmt = $conn->prepare("INSERT INTO criminal (id, name, dob, case_n, previous_c, harm_l, case_id) VALUES (?, ?, ?, ?, ?, ?, ?)");
  $stmt->bind_param("isdsiii", $id, $name, $dob, $case_n, $previous_c, $harm_l, $case_id);

  // Execute the statement
  $stmt->execute();

  // Check if the statement was executed successfully
  if ($stmt->affected_rows > 0) {
    echo "<script> alert('Staff Member Added Successfully');</script>";
  } else {
    echo "Error: " . $stmt->error;
  }

  // Close the statement and connection
  $stmt->close();
  $conn->close();
}
?>
`;
       }

       if(e.target.value == "4"){
    	text.innerHTML = `
      <div class="col-lg-8 mt-5 mt-lg-0 text-center" >

<form action="" method="post" role="form" class="">
  <div class="row gy-2 gx-md-3">
    <div class="form-group col-12">
      <input type="number" class="form-control" name="staffid" id="s_id" placeholder="Type Associated Staff ID">
    </div>
    <div class="form-group col-12">
      <input type="text" class="form-control" name="name" id="s_name" placeholder="Type Name of Staff Member" required>
    </div>
    <div class="form-group col-12">
      <input type="text" class="form-control" name="work" id="s_work" placeholder="Type Work of Staff Member" required>
    </div>
    <div class="my-3 col-12">
      <!--<div class="loading">Loading</div> -->
      <div class="error-message"></div>
      <div class="sent-message">Added Successfully</div>
    </div>
    <div class="text-center col-12"><button type="submit" class="btn btn-primary" name="submit">Add</button></div>
  </div>
</form>
</div>

<?php
if (isset($_POST['submit'])) {
  $id = $_POST['staffid'];
  $name = $_POST['name'];
  $work = $_POST['work'];

  // Prepare the statement
  $stmt = $conn->prepare("INSERT INTO staff (id, name, work) VALUES (?, ?, ?)");
  $stmt->bind_param("iss", $id, $name, $work);

  // Execute the statement
  $stmt->execute();

  // Check if the statement was executed successfully
  if ($stmt->affected_rows > 0) {
    echo "<script> alert('Staff Member Added Successfully');</script>";
  } else {
    echo "Error: " . $stmt->error;
  }

  // Close the statement and connection
  $stmt->close();
  $conn->close();
}
?>
`;
       }
    })
    
</script>

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