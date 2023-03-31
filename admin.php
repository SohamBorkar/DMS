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
      echo"Soory , You are not Admin";
  
      header('location:admin.php');
    }
  }

?>