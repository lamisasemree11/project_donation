<?php
include("header.php");
 ?>

    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/don.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">

          </div>
        </div>
      </div>
    </section>

		<section class="ftco-section contact-section">
      <div class="container">
        <div class="row block-9 justify-content-center mb-5">
          <div class="col-md-10 mb-md-5">
            <?php
                $id_user = $_GET['id'];
              if(isset($_POST['submit'])){
                $projectTitle   = filter_var($_POST['projectTitle'], FILTER_SANITIZE_STRING);
                $projectDesc   = filter_var($_POST['projectDesc'], FILTER_SANITIZE_STRING);
                $projectOwner   = filter_var($_POST['projectOwner'], FILTER_SANITIZE_STRING);
                $phone   = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
                $email   = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
                $money   = filter_var($_POST['money'], FILTER_SANITIZE_STRING);
                $image   = filter_var($_POST['image'], FILTER_SANITIZE_STRING);
                $address   = filter_var($_POST['address'], FILTER_SANITIZE_STRING);
                $theLastDate   = filter_var($_POST['theLastDate'], FILTER_SANITIZE_STRING);
                global $conn;
                $sql = "INSERT INTO `smallproject`(`id_user`,`project_title`, `project_Desc`, `project_owner`, `phone`,`email`, `Total_amount`, `project_img`, `address`, `Last_donate_date`)
                         VALUES ('$id_user','$projectTitle', '$projectDesc', '$projectOwner', '$phone', '$email', '$money', '$image', '$address', '$theLastDate')";
                $q = mysqli_query($conn , $sql);
                if ($q) {
                    echo "<div style='padding-left:500px;font-size:18px;font-weight:bold;' class='alert alert-success'>تم ارسال مشروعك بنجاح انتظر موافقة مسؤول النظام على نشره</div>";
                } else {
                    echo "<div style='padding-left:600px;font-size:18px;font-weight:bold;' class='alert alert-danger'>لم يتم الارسال اعد المحاولة مجددا</div>";
                }
              }
            ?>
            <form class="border border-nowhite p-5 contact-form" method="post"  role="form" autocomplete="off">
              <h1 class="text-center" style="color:#00bdaa;">مشروعي</h1>

              <div class="form-group">
                <h5 style="text-align:right; margin-right:10px;">عنوان المشروع<h5>
                <input type="text" class="form-control" name="projectTitle"  placeholder="ادخل عنوان المشروع" required>
              </div>
              <div class="form-group">
                <h5 style="text-align:right; margin-right:10px;">وصف المشروع<h5>
                <textarea name="projectDesc"   cols="30" rows="7" class="form-control"  required></textarea>
              </div>
              <div class="form-group">
                  <h5 style="text-align:right; margin-right:10px;">اسم مالك المشروع<h5>
                <input type="text" class="form-control" name="projectOwner"  placeholder="ادخل اسم مالك المشروع" required>
              </div>
              <div class="form-group">
                <h5 style="text-align:right; margin-right:10px;">رقم الجوال-الهاتف<h5>
                <input type="text" class="form-control" minlength="10" maxlength="10" name="phone"  placeholder="ادخل رقم الهاتف" required>
              </div>
              <div class="form-group">
                <h5 style="text-align:right; margin-right:10px;">البريد الالكتروني للتواصل<h5>
                <input type="email" class="form-control" name="email"  placeholder="ادخل بريدك الالكتروني" required>
              </div>
              <div class="form-group">
                <h5 style="text-align:right; margin-right:10px;">مبلغ المحتاج اليه<h5>
                <input type="number" class="form-control" name="money"  placeholder="ادخل المبلغ" required>
              </div>
              <div class="form-group">
                <h5 style="text-align:right; margin-right:10px;">عنوان صاحب المشروع<h5>
                <input type="text" class="form-control" name="address"  placeholder="في اي مدينة تقع ؟ ومن اي منطقة؟" required>
              </div>
              <div class="form-group">
                <h5 style="text-align:right; margin-right:10px;">صورة <h5>
                <input type="file" class="form-control" name="image"   placeholder="ادخل صورة للمشروع"  required>
              </div>
              <div class="form-group">
                <h5 style="text-align:right; margin-right:10px;">اخر موعد للتبرع<h5>
                <input type="date" class="form-control" name="theLastDate"  placeholder="ادخل اخر موعد للتبرع"  required>
              </div>
              <div class="form-group">
                <input type="submit"   name="submit" value="انشر" class="btn py-3 px-4 btn-primary" style="width:100%;">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
      <script src="js/jquery.min.js"></script>
      <script src="js/jquery-migrate-3.0.1.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/jquery.easing.1.3.js"></script>
      <script src="js/jquery.waypoints.min.js"></script>
      <script src="js/jquery.stellar.min.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/jquery.magnific-popup.min.js"></script>
      <script src="js/aos.js"></script>
      <script src="js/jquery.animateNumber.min.js"></script>
      <script src="js/scrollax.min.js"></script>
      <script src="js/main.js"></script>
  </body>
</html>
