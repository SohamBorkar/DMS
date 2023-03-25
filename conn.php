<?php
echo "Trying to establish connection";

$servername = "localhost";
$username = "root";
$password = "";

$id = $_POST['id'];
$pass = $_POST['pass'];

$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
    die("we failed to connect".mysqli_connect_error());
}
echo "conncetion successful and established";
$stmt = $conn->prepare("insert into idpass(id, pass) values(?, ?)");
$stmt->bind_param("ss", $id, $pass);
$stmt->execute();
echo "added to db";
$stmt->close();
$conn->close();

?>