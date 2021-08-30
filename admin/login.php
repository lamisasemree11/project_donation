<?php
session_start();
include("db/dbconnect.php");
global $conn;

?>
<!DOCTYPE html>
<html lang="en" dir="rtl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>مسؤول النظام لموقع كنوز الخير</title>
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                <div class="brand-logo" style="padding-left:80px;">
                  <img src="assets/images/img1.jfif">
                </div>

                <h4 style="font-weight: bold;padding-left:60px;">تسجيل الدخول لمسؤول النظام</h4>
                   <?php
                   if(isset($_POST['submit'])) {

                         $email_admin= $_POST['email_admin'];
                         $pass_admin = $_POST['pass_admin'];

                         $_SESSION['email_admin'] =$email_admin;
                         $_SESSION['pass_admin']=$pass_admin;


                         $sql = "SELECT * FROM admin WHERE admin_email = '$email_admin' and admin_password = '$pass_admin'";
                         $result = mysqli_query($conn,$sql);
                         if(mysqli_num_rows($result) == 1) {
                           $row = $result->fetch_assoc();
                           header('location: admin.php');
                       }
                        else{
                                 echo "<div class='alert alert-danger'>البريد الالكتروني او كلمة المرور خاطئة</div>";
                            }
                          }
                    ?>
                <form class="pt-3" action="" method="POST">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" name="email_admin" placeholder="ادخل اسم المستخدم">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-lg" name="pass_admin" placeholder="ادخل كلمة المرور">
                  </div>
                  <div class="mt-3">
                    <input class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" type="submit" name="submit" value="تسجيل الدخول">
                    <a href="../index.php">العودة الى الرئيسية</a>

                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
  </body>
</html>
