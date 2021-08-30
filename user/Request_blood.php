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
                <li><a href=<?php echo 'Donor_reg.php?id='.$row["id"];?>> <span class="ion-ios-person ml-1"></span>تسجيل متبرع </a></li>
                <li><a style="color:red;" href=<?php echo 'Request_blood.php?id='.$row["id"];?>><span class="ion-ios-person ml-1"></span>محتاج تبرع </a></li>
                <li><a href=<?php echo 'Search_donor.php?id='.$row["id"];?>><span class="ion-ios-search ml-1"></span>بحث عن متبرع </a></li>
              </ul>
            </div>

          </div> <!-- END COL -->

          <div class="col-lg-8 ftco-animate">

            <div class="comment-form-wrap pt-5" style="text-align:right;">
              <h3 class="mb-5 h4 font-weight-bold" style="text-align:center; margin-bottom:3px; font-size:30px;color:#dc3545;"> <span class="ion-ios-create ml-2"></span>نموذج محتاج تبرع</h3>
              <form class="appointment-form ftco-animate" method="post"  role="form" autocomplete="off" >
                <?php
                  if(isset($_POST["request"]))
                  {
                     $sql="INSERT INTO request_blood (name,city, blood_group,gender,contactNum,email) VALUES
                     ('{$_POST["reqName"]}', '{$_POST["reqCity"]}', '{$_POST["bloodGroup"]}','{$_POST["reqGender"]}','{$_POST["reqContact"]}','{$_POST["reqEmail"]}');";
                  if($conn->query($sql))
                  {
                    echo '
                      <div class="alert alert-success" style="text-align:right;">
                      <a href="#" style="margin-left:10px;" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      تم ارسال بياناتك بنجاح انتظر رسالة من مسؤول النظام
                      </div>

                      ';
                  }else {
                    echo '
                      <div class="alert alert-danger" style="text-align:right;">
                      <a href="#" style="margin-left:10px;" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      لم يتم ارسال بياناتك اعد المحاولة مجددا
                      </div>

                      ';
                  }
                  }
                ?>
                <div class="form-group">
                  <input type="text"  class="form-control" placeholder="الاسم بالكامل" id="reqName"  name="reqName"  required >
                </div>
                <div class="form-group">
                  <select id="reqCity" name="reqCity"  class="form-control" required>
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
                  <select id="bloodGroup" name="bloodGroup" class="form-control" required>
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
                  <select id="reqGender"  name="reqGender" class="form-control" required>
                    <option >الجنس</option>
                    <option value="ذكر">ذكر</option>
                    <option value="انثى">انثى</option>
                  </select>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" minlength="10" maxlength="10" placeholder="رقم الهاتف" id="reqContact"   name="reqContact"  required >
                </div>
                <div class="form-group">
                <input type="email" id="reqEmail" name="reqEmail"  class="form-control" placeholder=" البريد الالكتروني" required>
                </div>
                <div class="form-group">
                  <input type="submit" name="request" value="اضف بياناتك" class="btn py-3 px-4 btn-primary1">
                </div>
              </form>
            </div>

          </div> <!-- .col-md-8 -->


        </div>
			</div>
		</section>


  <script>
// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
if (event.target == modal) {
  modal.style.display = "none";
}
}
</script>
<script>
  // Get the modal
  var modal = document.getElementById('id01');

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
      if (event.target == modal) {
          modal.style.display = "none";
      }
  }
  </script>
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
