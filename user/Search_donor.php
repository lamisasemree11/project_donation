<?php
include("header.php");
?>

    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/Blood-donation.png');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">التبرع بالدم</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">الرئيسية <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="http://localhost/ProjectDonation/#programs">خدماتنا <i class="ion-ios-arrow-forward"></i></a></span> <span>التبرع بالدم  <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

		<section class="ftco-section"style="text-align:right;">
			<div class="container">
        <div style="margin-top:-50px;" class="row">
            <div class="col-lg-12 col-xs-12">
                <ol class="breadcrumb">
                  <li style="margin-left:40px;"><a href=<?php echo 'Donor_reg.php?id='.$row["id"];?>> <span class="ion-ios-person ml-1"></span>تسجيل متبرع </a></li>
                  <li style="margin-left:40px;"><a href=<?php echo 'Request_blood.php?id='.$row["id"];?>><span class="ion-ios-person ml-1"></span>محتاج تبرع </a></li>
                  <li><a style="color:red;" href=<?php echo 'Search_donor.php?id='.$row["id"];?>><span class="ion-ios-search ml-1"></span>بحث عن متبرع </a></li>
                </ol>
            </div>
        </div>
				<div class="row">

            <div class="col-lg-6 ftco-animate">
              <div class="comment-form-wrap pt-5">
                <h3 class="mr-2 mb-5 h4 font-weight-bold" style="text-align:center; margin-bottom:3px; font-size:30px;color:#dc3545;"><span class="ion-ios-search ml-2"></span>بحث عن متبرعين</h3>
                <form name="form_seach_donor" id="form_seach_donor" class="appointment-form ftco-animate" style="text-align:right;">
                  <div class="form-group">
                    <select name="City" class="form-control" required  >
                      <option value=""> اختر المدينة </option>
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
                    <select name="Blood_group"   class="form-control " required >
                        <option>  اختر فصيلة الدم</option>
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
                  <button class="btn btn-primary"  name="search" type="button" id="search"><i class='fa fa-search'></i> بحث</button>
                  </div>
                </form>
              </div>
          </div>
          <div class="col-lg-6 ftco-animate" id="feedback">
             <img src="images/search.jfif" alt="" style="margin-top:150px;margin-right:150px;">
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
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>


  <script>
 $(document).on('click','#search',function(){

   $.ajax({
         url:"search_data_donor.php",
         method:"POST",
         data:$("#form_seach_donor").serialize(),
         success:function(data)
         {
           $("#feedback").html(data);

         }
       });

 });
</script>

  </body>
</html>
