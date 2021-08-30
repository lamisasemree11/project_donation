<?php
include("../admin/db/dbconnect.php");
global $conn;
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

<div class="limiter">
	<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
		<div class="wrap-login100">
			<form method="post" autocomplete="off">
				<span class="login100-form-title p-b-34 p-t-27">
					استعادة كلمة المرور
				</span>
				<?php

				 if(isset($_POST['submit'])){

					 $user_email   = filter_var($_POST['user_email'], FILTER_SANITIZE_STRING);
					 $user_phone   = filter_var($_POST['user_phone'], FILTER_SANITIZE_STRING);

					 $sql="SELECT * FROM users WHERE email = '$user_email' and phonenumber = '$user_phone'";
					 $result = mysqli_query($conn,$sql);
					 if(mysqli_num_rows($result) == 1) {
						 $row = $result->fetch_assoc();
							header('location: msg.php?id='.$row['id']);
					 }else {
							 echo "<div style='font-size:18px;font-weight:bold;' class='alert alert-danger'>عذرا حدث خطأ اعد المحاولة مجددا</div>";
					 }
				 }
			 ?>
					<div class="wrap-input100 validate-input" >
						<input style="padding-right:20px;" class="input100" type="text" name="user_email" required placeholder="البريد الالكتروني">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

        <div class="wrap-input100 validate-input" >
          <input style="padding-right:20px;" class="input100" type="text" name="user_phone" required placeholder="رقم الجوال">
          <span class="focus-input100" data-placeholder="&#xf207;"></span>
        </div>

					<div class="container-login100-form-btn">
						<input style="color:white;margin-bottom:20px;" class="login100-form-btn" type="submit" name="submit" value="استعادة">
					</div>
					</form>
					<div class="text-center ">
						<a class="txt1" href="index.php">
							تسجيل الدخول
								<i class="fa fa-long-arrow-left m-l-5"></i>
						</a>
					</div>
			</div>
		</div>
	</div>


<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
