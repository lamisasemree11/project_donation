<?php
include("header.php");
 ?>

    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/story.jfif');">
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
                $name   = filter_var($_POST['Username'], FILTER_SANITIZE_STRING);
                $email   = filter_var($_POST['Email'], FILTER_SANITIZE_STRING);
                $phone   = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
                $address   = filter_var($_POST['address'], FILTER_SANITIZE_STRING);
                $money   = filter_var($_POST['money'], FILTER_SANITIZE_STRING);
                $image   = filter_var($_POST['image'], FILTER_SANITIZE_STRING);
                $title   = filter_var($_POST['title'], FILTER_SANITIZE_STRING);
                $story   = filter_var($_POST['story'], FILTER_SANITIZE_STRING);
                $date   = filter_var($_POST['story_date'], FILTER_SANITIZE_STRING);
                $sql = "INSERT INTO `mystory`(`id_user`,`name`, `email`, `phone`, `address`,`image`, `money`, `title`, `story`, `Last_donate_date`)
                         VALUES ('$id_user','$name', '$email', '$phone', '$address', '$image', '$money', '$title', '$story','$date')";
                $q = mysqli_query($conn , $sql);
                if ($q) {
                    echo "<div style='padding-left:550px;font-size:18px;font-weight:bold;' class='alert alert-success'>تم ارسال قصتك للمسؤول انتظر الموافقة على نشرها </div>";
                } else {
                    echo "<div style='font-size:18px;font-weight:bold;' class='alert alert-danger'>لم يتم الارسال اعد المحاولة مجددا</div>";
                }
              }
            ?>
            <form class="border border-nowhite p-5 contact-form" method="post"  role="form" autocomplete="off">
              <h1 class="text-center" style="color:#00bdaa;">قصتي</h1>

              <div class="form-group">

                <h5 style="text-align:right; margin-right:10px;">الاسم بالكامل<h5>
                <input type="text" class="form-control" name="Username"  placeholder="ادخل الاسم بالكامل" required>
              </div>
              <div class="form-group">
                <h5 style="text-align:right; margin-right:10px;">عنوان القصة<h5>
                <input type="text" class="form-control" name="title"   placeholder="ادخل العنوان"  required>
              </div>
              <div class="form-group">
                <h5 style="text-align:right; margin-right:10px;">قصتي<h5>
                <textarea name="story"   cols="30" rows="7" class="form-control"  required></textarea>
              </div>
              <div class="form-group">
                  <h5 style="text-align:right; margin-right:10px;">البريد الالكتروني<h5>
                <input type="text" class="form-control" name="Email"  placeholder="ادخل البريد الالكتروني" required>
              </div>
              <div class="form-group">
                <h5 style="text-align:right; margin-right:10px;">رقم الجوال-الهاتف<h5>
                <input type="text" class="form-control" minlength="10" maxlength="10" name="phone"  placeholder="ادخل رقم الهاتف" required>
              </div>
              <div class="form-group">
                <h5 style="text-align:right; margin-right:10px;">عنوان صاحب القصة<h5>
                <input type="text" class="form-control" name="address"  placeholder="في اي مدينة تقع ؟ ومن اي منطقة؟" required>
              </div>
              <div class="form-group">
                <h5 style="text-align:right; margin-right:10px;">مبلغ المحتاج اليه<h5>
                <input type="number" class="form-control" name="money"  placeholder="ادخل المبلغ" required>
              </div>
              <div class="form-group">
                <h5 style="text-align:right; margin-right:10px;">صورة <h5>
                <input type="file" class="form-control" name="image"   placeholder="ادخل صورة لك" required >
              </div>
              <div class="form-group">
                <h5 style="text-align:right; margin-right:10px;">اخر موعد للتبرع<h5>
                <input type="date" class="form-control" name="story_date"   placeholder="ادخل اخر موعد للتبرع" required >
              </div>
              <div class="form-group">
                <input type="submit"   name="submit"  type="button" value="انشر" class="btn py-3 px-4 btn-primary" style="width:100%;">
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
      </script>
  </body>
</html>
