<?php
session_start();
include "conn.php";
//include "db_connect.php";
  error_reporting(0);
?>

<?php
$pid = $_GET['pid'];
$sql = "DELETE FROM `police` WHERE pid = '$pid'";
$result = mysqli_query($conn,$sql);

 //checking of execution of query
 if ($result) {
    echo "<script>alert('Record Deleted')</script>";
    ?>
    <meta http-equiv= "refresh" content = "0; url = http://localhost/DMS/assets/partials/police.php"/>
    <?php
}
else{
    echo "<script>alert('Failed to Delete')</script>";
    ?>
    <meta http-equiv= "refresh" content = "0; url = http://localhost/DMS/assets/partials/police.php"/>
    <?php
}
?>