<?php
include 'assets/partials/conn.php';
?>

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['id'];
        $password = $_POST['password'];
         echo $email;
         echo $password;
        // $sql="Select * from cred where ID=$email";
        $sql="select * from cred";
        $result=mysqli_query($conn,$sql);
        $result = mysqli_fetch_row($result);
        # echo $result;
        # echo $sql;
        if(is_null($result)) {

        }
        else {
            if ($result[1] == $password) {
                header("Location: http://localhost/DMS/admin.php");
            }
            else {
                // Give Waring Wrong username or password
                echo "Wrong cred";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Login Page</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

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
        <!-- Hero Section -->

        <!-- Template Main CSS File -->
        <!--
        <section id="hero" class="d-flex align-items-center">
            <div class="container position-relative" data-aos="fade-up" data-aos-delay="80">
                <div class="row justify-content-center">
                    <div class="col-md-10 offset-md-1">
                        <section id="contact" class="contact">
                            <div class="" style="margin-left: 380px; margin-top: 1px;">
                                <h3><b>Login</b></h3>
                            </div> 
                            <div class="col-lg-8 mt-5 mt-lg-0 text-center " style="margin-left: 250px;">
                                <form action=".html" method="post" role="form" class="php-email-form">
                                    <div class="row gy-2 gx-md-3">
                                        <div class="col-md-7 form-group">
                                            <input type="text" name="name" class="form-control" id="name"
                                                placeholder="Enter Your ID" required>
                                        </div>
                                        <div class="col-md-7 form-group">
                                            <div class="input-group">
                                                <input type="password" class="form-control" name="password" id="password"
                                                    placeholder="Enter Your Password" required>
                                                <button type="button" class="btn btn-outline-secondary" id="show-password">
                                                    <i class="bi bi-eye"></i>
                                                </button>
                                            </div>
                                        </div>
                                        
                                        <div class="text-center col-12">
                                            <button type="submit" style="margin-right: 250px;"><a href="home.html" style="color: #fff; text-decoration: none;">Authenticate</a></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
    -->

 <!-- End Hero -->

    
    

<!--data-aos="fade-up" data-aos-delay="80"-->
<!--
    <div class="container vh-100">
		<div class="row justify-content-center h-100" >
			<div class="card w-25 my-auto shadow" >
				<div class="text-center text-gray " style="margin-top: 12px;">
					<h2><b>Login</b></h2>
				</div>
				<div class="card-body">
					<form action="" method="">
						<div class="form-group">
							<label for="id">ID</label>
							<input type="text" id="id" class="form-control" name="" />
						</div>
						<div class="form-group" style="margin-top: 10px;">
							<label for="password">Password</label>
							<input type="password" id="password" class="form-control" name="" />
						</div>
                        <div class="" style="margin-top: 15px;">
                            <input type="submit" class="btn btn-primary w-100" value="Authenticate" name="">
                        </div>
					</form>
				</div>
			</div>
		</div>
	</div>
-->


<div class="container vh-100">
	<div class="row justify-content-center h-100">
		<div class="card w-25 my-auto shadow">
			<div class="text-center text-gray" style="margin-top: 12px;">
				<h2><b>Login</b></h2>
			</div>
			<div class="card-body">
				<form action="login.php" method="post" role="form" class="php-email-form">
					<div class="form-group">
						<label for="id">ID</label>
						<input type="text" id="id" class="form-control" name="id" required/>
					</div>

					<div class="form-group" style="margin-top: 10px;">
						<label for="password">Password</label>
						<div class="input-group">
							<input type="password" id="password" class="form-control" name="password" required />
							<div class="input-group-append">
								
							</div>
                            <button type="button" class="btn btn-outline-secondary" id="show-password">
                                <i class="bi bi-eye"></i>
                            </button>
						</div>
                        
					</div>
					<div class="text-center col-12" style="margin-top: 15px;">
						<button type="submit" class="btn btn-primary w-100" value="Authenticate" name="">Authenticate
					</div>
				</form>
			</div>
		</div>
	</div>
</div>


<script>
    const passwordInput = document.getElementById("password");
    const showPasswordButton = document.getElementById("show-password");
    showPasswordButton.addEventListener("click", () => {
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            showPasswordButton.innerHTML = '<i class="bi bi-eye-slash"></i>';
        } else {
            passwordInput.type = "password";
            showPasswordButton.innerHTML = '<i class="bi bi-eye"></i>';
        }
    });
</script>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>

