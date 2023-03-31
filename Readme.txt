





/*
<?php
    echo "testing loginl.php file";

    $id = $_POST['id'];
    $password = $_POST['password'];

    $conn = new mysqli("localhost", "root", "", "dms");
    if ($conn->connect_error) {
        die("we failed to connect".connect_error);
    }
    $stmt = $conn->prepare("select * from police where id = ?");
    $stmt->bind_param("i", $id);
    $stmt.execute();
    $stmt_result = $stmt->get_result();
    if($stmt_result->num_rows > 0){
        $data = $stmt_result->fetch_assoc();
        if($data['password']===$password){
            echo "<h2>login success<\h2>";    
        }
        else{
            echo "<h2>Invalid email or password<\h2>";
        }
    }
    else{
        echo "<h2>Invalid email or password<\h2>";
    }
?>












<?php
    session_start();

    //If already login redirect to welcome page
    if (isset($_SESSION['status'])) {
        header("Location: /phpmicroproject/welcome.php");
    }

?>
<?php
    include "db_connect.php";
?>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql="Select * from signup where EmailID='$email'";
        $result=mysqli_query($conn,$sql);
        $result = mysqli_fetch_row($result);
        if(is_null($result)) {
            // Give Waring Wrong username or password
        }
        else {
            if ($result[1] == $password) {
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                header("Location: /phpmicroproject/welcome.php");
            }
            else {
                // Give Waring Wrong username or password
            }
        }
    }
?>

*/

