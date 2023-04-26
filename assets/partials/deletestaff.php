<?php
session_start();
include "conn.php";
//include "db_connect.php";
  error_reporting(0);
?>


<?php
$id = $_GET['id'];
$sql = "DELETE FROM staff WHERE id = '$id'";
$result = mysqli_query($conn,$sql);

 //checking of execution of query
 if ($result) {
    echo "<script>alert('Record Deleted')</script>";
    ?>
    <meta http-equiv= "refresh" content = "0; url = http://localhost/DMS/assets/partials/staff.php"/>
    <?php
}
else{
    echo "<script>alert('Failed to Delete')</script>";
}
?>