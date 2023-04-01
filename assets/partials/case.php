<?php
echo "case .php file";
?>

<?php
include 'conn.php';
?>

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $sql="select * from police";
        $result=mysqli_query($conn,$sql);
        $result = mysqli_fetch_row($result);
        # echo $result;
        # echo $sql;
        if(is_null($result)) {
            echo "result is null";
        }
        else {
            echo "fetching details from police";
        }
    }
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Police Details Page</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

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

      <h1 class="logo" style="font-size: 32px"><a href="http://localhost/DMS/admin.php"><b>Polisys</b></a></h1>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" style="font-size: 18px" href="police.php">Police</a></li>
          <li><a class="nav-link scrollto" style="font-size: 18px" href="criminal.php">Criminals</a></li>
          <li><a class="nav-link scrollto" style="font-size: 18px" href="case.php">Cases</a></li>
          <li><a class="nav-link scrollto" style="font-size: 18px" href="staff.php">Staff</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  </script>

  <div class=" text-center" style="margin-top: 80px">
          <h2>Cases Details</h2>
        </div>

  <section id="detials" class="align-items: center" style="margin-left: 120px" style="margin-right: 120px" >
    
        <table class="table">
  <thead class="table-light">
    <tr>
        <th>Case ID</th>
        <th>Case Name</th>
        <th>Associated Polic ID</th>
        <th>Associated Criminal ID</th>
        <th>Status of Case</th>
        <th>Case Registration Date/Time</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "dms";

    //create connection
    $connection = new mysqli($server,$username,$password,$database);

    //check for connection
    if (!$conn) {
        die("we failed to connect".mysqli_connect_error());
    }

    //reading data
    $sql = "SELECT * FROM `case`";
    $result = $connection->query($sql);

    //checking of execution of query
    if (!$result) {
        die("Invalid query entered".mysqli_connect_error());
    }

    //reading data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>".$row["case_id"]."</td>
        <td>".$row["case_name"]."</td>
        <td>".$row["pid"]."</td>
        <td>".$row["cid"]."</td>
        <td>".$row["status"]."</td>
        <td>".$row["dt"]."</td>
        <td>
        <a class='btn btn-primary' href='#' role='button'>Update</a>
        <button class='btn btn-danger' type='submit'>Delete</button>
        </td>
    </tr>";
    }

    ?>
  </tbody>
</table>
        
</section>

<!-- Vendor JS Files -->
<script src="vendor/purecounter/purecounter_vanilla.js"></script>
<script src="vendor/aos/aos.js"></script>
<script src="vendor/glightbox/js/glightbox.min.js"></script>
<script src="vendor/swiper/swiper-bundle.min.js"></script>

<!-- Template Main JS File -->
<script src="js/main.js"></script>

</body>
