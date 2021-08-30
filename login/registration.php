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
				<form  method="post" autocomplete="off">
					<span class="login100-form-title p-b-34 p-t-27">
						انشاء حساب
					</span>
					<?php

					 if(isset($_POST['submit'])){
						 $user_name   = filter_var($_POST['user_name'], FILTER_SANITIZE_STRING);
						 $user_email   = filter_var($_POST['user_email'], FILTER_SANITIZE_STRING);
						 $user_phone   = filter_var($_POST['user_phone'], FILTER_SANITIZE_STRING);
						 $user_inatial_balance   = filter_var($_POST['user_inatial_balance'], FILTER_SANITIZE_NUMBER_INT);
						 $user_pass   = $_POST['user_pass'];
						 $couser_pass   = $_POST['couser_pass'];
						 $sql2="Select * from users";
 						 $result2=$conn->query($sql2);
						 if("$user_pass"!= "$couser_pass") {
						echo "<div style='font-size:18px;font-weight:bold;' class='alert alert-danger'>كلمة المرور غير متطابقة </div>";
					}else if($result2->num_rows>0)
						{
							$row2=$result2->fetch_assoc();
							if($row2["email"]== "$user_email"){
              	echo "<div style='font-size:18px;font-weight:bold;' class='alert alert-danger'>البريد الالكتروني موجود بالفعل</div>";
							}else if($row2["phonenumber"]== "$user_phone") {
							echo "<div style='font-size:18px;font-weight:bold;' class='alert alert-danger'>رقم الهاتف موجود بالفعل</div>";
						}else{
											 $sql = "INSERT INTO `users`(`name`, `email`, `phonenumber`, `Initial_balance`,`password`,`first_balance`)
																VALUES ('$user_name', '$user_email', '$user_phone', '$user_inatial_balance', '$user_pass', '$user_inatial_balance')";
											 $q = mysqli_query($conn , $sql);
											 if ($q) {
													header('location: index.php');
											 } else {
													 echo "<div style='font-size:18px;font-weight:bold;' class='alert alert-danger'>لم تتم عملية انشاء الحساب</div>";
											 }
										 }
				}


					 }
				 ?>
          <div class="wrap-input100 validate-input" >
						<input style="padding-right:20px;" class="input100" type="text" name="user_name" placeholder="الاسم بالكامل" required>
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input">
						<input style="padding-right:20px;" class="input100" type="text" name="user_email" placeholder="البريد الالكتروني" required>
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
          <div class="wrap-input100 validate-input" >
						<input style="padding-right:20px;" class="input100" type="text" minlength="10" maxlength="10" name="user_phone" required placeholder="رقم الجوال">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
          <div class="wrap-input100 validate-input" >
						<input style="padding-right:20px;" class="input100" type="number" name="user_inatial_balance" placeholder="رصيد حسابك بالشيكل" required>
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input">
						<input style="padding-right:20px;" class="input100" type="password" name="user_pass" placeholder="كلمة المرور" required>
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
					<div class="wrap-input100 validate-input">
						<input style="padding-right:20px;" class="input100" type="password" name="couser_pass" placeholder="اعادة كلمة المرور" required>
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="container-login100-form-btn">
						<input style="color:white;margin-bottom:20px;" class="login100-form-btn" type="submit" name="submit" value="انشاء حساب">
					</div>
					</form><br>

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
