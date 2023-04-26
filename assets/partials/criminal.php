<?php
echo "criminal .php file";
?>

<?php
include 'conn.php';
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

  </script>
  
  <div class=" text-center" style="margin-top: 80px">
          <h2>Criminal Details</h2>
        </div>

  <section id="detials" class="align-items: center" style="margin-left: 120px" style="margin-right: 120px" >
    
        <table class="table">
  <thead class="table-light">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>DOB</th>
        <th>Case Name</th>
        <th>Previous Crime Number</th>
        <th>Harmfulness Level</th>
        <th>Associated Case ID</th>
        <th>Actions</th>
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
    $sql = "select * from criminal";
    $result = $connection->query($sql);

    //checking of execution of query
    if (!$result) {
        die("Invalid query entered".mysqli_connect_error());
    }

    //reading data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>".$row["cid"]."</td>
        <td>".$row["name"]."</td>
        <td>".$row["dob"]."</td>
        <td>".$row["c_name"]."</td>
        <td>".$row["prev_crimes"]."</td>
        <td>".$row["harm_level"]."</td>
        <td>".$row["case_id"]."</td>
        <td>
        <a href=''><input type='submit' value='Update' class='btn btn-primary'></a>
        <a href='deletecriminal.php?cid=$row[cid]'><input type='submit' value='Delete' class='btn btn-danger' onclick = 'return checkdelete()'></a>
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

<script>
  function checkdelete(){
    return confirm('You really want to delete this Record?');
  }
</script>

</body>
