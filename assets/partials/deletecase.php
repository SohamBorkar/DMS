<?php
session_start();
include "conn.php";
//include "db_connect.php";
  error_reporting(0);
?>


<?php
$id = $_GET['case_id'];
$sql = "DELETE FROM `case` WHERE case_id = '$id'";
$result = mysqli_query($conn,$sql);

 //checking of execution of query
 if ($result) {
    echo "<script>alert('Record Deleted')</script>";
    ?>
    <meta http-equiv= "refresh" content = "0; url = http://localhost/DMS/assets/partials/case.php"/>
    <?php
}
else{
    echo "<script>alert('Failed to Delete')</script>";
    ?>
    <meta http-equiv= "refresh" content = "0; url = http://localhost/DMS/assets/partials/case.php"/>
    <?php
}
?>