<?php
// echo "Trying to establish connection";

$server = "localhost";
$username = "root";
$password = "";
$database = "dms";

# $id = $_POST['id'];
# $password = $_POST['password'];

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn) {
    die("we failed to connect".mysqli_connect_error());
}
 echo "conncetion successful and established";

// $stmt = $conn->prepare("insert into cred(ID, Pass) values(?, ?)");
// $stmt->bind_param("ss", $id, $password);
// $stmt->execute();
// echo "added to db";
// $stmt->close();
// $conn->close();

?>