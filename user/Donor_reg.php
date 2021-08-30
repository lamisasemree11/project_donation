<?php
include("header.php");
?>

    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/Blood-donation.png');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">التبرع بالدم</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href=<?php echo 'pagesite.php?id='.$row["id"];?>>الرئيسية <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="">خدماتنا <i class="ion-ios-arrow-forward"></i></a></span> <span>التبرع بالدم  <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

		<section class="ftco-section"style="text-align:right;">
			<div class="container">
        <div class="row">
          <div class="col-lg-4 sidebar ftco-animate">

            <div class="sidebar-box ftco-animate">
              <h3>التبرع بالدم</h3>
              <ul class="categories">
                <li><a style="color:red;" href=<?php echo 'Donor_reg.php?id='.$row["id"];?>> <span class="ion-ios-person ml-1"></span>تسجيل متبرع </a></li>
                <li><a href=<?php echo 'Request_blood.php?id='.$row["id"];?>><span class="ion-ios-person ml-1"></span>محتاج تبرع </a></li>
                <li><a href=<?php echo 'Search_donor.php?id='.$row["id"];?>><span class="ion-ios-search ml-1"></span>بحث عن متبرع </a></li>
              </ul>
            </div>

          </div>



          <div class="col-lg-8 ftco-animate">

            <div class="comment-form-wrap pt-2" style="text-align:right;">
              <h3 class="mb-5 h4 font-weight-bold" style="text-align:center; margin-bottom:3px; font-size:30px; color:#dc3545;"><span class="ion-ios-create ml-2"></span> نموذج تسجيل متبرع</h3>
              <form class="appointment-form ftco-animate" method="post"  role="form" autocomplete="off">

                <?php
                  if(isset($_POST["insertdonor"])){
                    $donorName   = filter_var($_POST['donorName'], FILTER_SANITIZE_STRING);
                    $bloodGroup   = filter_var($_POST['bloodGroup'], FILTER_SANITIZE_STRING);
                    $donorEmail   = filter_var($_POST['donorEmail'], FILTER_SANITIZE_EMAIL);
                    $donorNo   = filter_var($_POST['donorNo'], FILTER_SANITIZE_STRING);
                    $donorCity   = filter_var($_POST['donorCity'], FILTER_SANITIZE_STRING);
                    $donor_gender   = filter_var($_POST['donor_gender'], FILTER_SANITIZE_STRING);
                    $donorHospital   = filter_var($_POST['donorHospital'], FILTER_SANITIZE_STRING);
                    $sql = "INSERT INTO `donors`(`donor_name`, `donor_blood_group`, `donor_email`,`donor_contactNo`, `donor_city`, `donor_gender`,`donor_hospital`)
                    VALUES ('$donorName', '$bloodGroup', '$donorEmail','$donorNo', '$donorCity', '$donor_gender','$donorHospital')";
                    $q = mysqli_query($conn , $sql);
                    if ($q) {
                        echo '<div class="alert alert-success" style="text-align:right;">
                        <a style="margin-left:10px;" href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        تم ارسال بياناتك بنجاح انتظر رسالة من مسؤول النظام
                        </div>

                        ';
                    } else {
                        echo '<div class="alert alert-danger" style="text-align:right;">
                        <a style="margin-left:10px;" href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>لم يتم ارسال  بياناتك اعد المحاولة مجددا</div>

                        ';
                    }

                  }
                ?>

                <div class="form-group">
                  <input type="text"  class="form-control" placeholder="اسم المتبرع"   name="donorName"  required >
                </div>
                <div class="form-group">
                  <select  name="donorCity"  class="form-control" required>
                    <option value="">  المدينة</option>
                    <option value="اريحا" >اريحا</option>
                    <option value="الخليل">الخليل</option>
                    <option value="القدس">القدس</option>
                    <option value="بيت حانون">بيت حانون</option>
                    <option value="بيت لاهيا">بيت لاهيا</option>
                    <option value="بيت لحم">بيت لحم</option>
                    <option value="جباليا">جباليا</option>
                    <option value="جنين">جنين</option>
                    <option value="خانيونس">خانيونس</option>
                    <option value="دير البلح">دير البلح</option>
                    <option value="رام الله">رام الله</option>
                    <option value="رفح">رفح</option>
                    <option value="طولكرم">طولكرم</option>
                    <option value="غزة">غزة</option>
                    <option value="قلقيلية">قلقيلية</option>
                    <option value="نابلس">نابلس</option>
                  </select>
                </div>
                <div class="form-group">
                  <select  name="bloodGroup" class="form-control" required>
                    <option value="">نوع الفصيلة</option>
                    <option value="Op">+O</option>
                    <option value="On">-O</option>
                    <option value="Bp">+B</option>
                    <option value="Bn">-B</option>
                    <option value="Ap">+A</option>
                    <option value="An">-A</option>
                    <option value="ABp">+AB</option>
                    <option value="ABn">-AB</option>
                    </select>
                </div>
                <div class="form-group">
                  <select   name="donor_gender" class="form-control" required>
                    <option >الجنس</option>
                    <option value="ذكر">ذكر</option>
                    <option value="انثى">انثى</option>
                  </select>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="اسم المستشفى"    name="donorHospital"  required >
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" minlength="10" maxlength="10" placeholder="رقم الهاتف"    name="donorNo"  required >
                </div>
                <div class="form-group">
                <input type="email"   name="donorEmail"  class="form-control" placeholder=" البريد الالكتروني" required>
                </div>
                <div class="form-group">
                  <input type="submit"  name="insertdonor" value="اضف بياناتك" class="btn py-3 px-4 btn-primary1">
                </div>
              </form>
            </div>

          </div> <!-- .col-md-8 -->


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
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

  </body>
</html>
