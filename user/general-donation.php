<?php
include("header.php");
 ?>

    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/donationFast.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">تبرع العام</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href=<?php echo 'pagesite.php?id='.$row["id"];?>>الرئيسية <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="">خدماتنا <i class="ion-ios-arrow-forward"></i></a></span> <span>تبرع العام  <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb ftco-consult">
			<div class="container">
       <div class="row">
				<div class="col-sm-12 d-flex no-gutters bg-primary align-items-stretch consult-wrap"style="border-radius:35px;box-shadow:4px 4px 10px 4px rgba(0,0,0,.2); margin-left:40px">
          <div class="col-mlb-1 bg-white align-items-stretch d-flex">
						<div class="ftco-animate  align-self-stretch px-4 py-5 w-100">
              <h2 class="heading-nowhite mb-4 " style="text-align:center;"><span class="ion-ios-create ml-2"></span>نموذج التبرع العام</h2>
              <?php
                $user_id = $_GET['id'];
                $Initial_balance_user =  $row["Initial_balance"];
                if(isset($_POST['donate'])){
                  $donateType   = filter_var($_POST['donateType'], FILTER_SANITIZE_STRING);
                  $public_don_amount = filter_var($_POST['public_don_amount'], FILTER_SANITIZE_NUMBER_INT);
                  if($Initial_balance_user >= $public_don_amount){
                  global $conn;
                  $sql = "INSERT INTO `general_don`(`id_user`, `don_type`, `don_value`)
                              VALUES ('$user_id', '$donateType', '$public_don_amount')";
                  $q = mysqli_query($conn , $sql);
                  if ($q) {
                      echo "<div style='padding-left:700px;font-size:18px;font-weight:bold;' class='alert alert-success'>شكرا لك لتبرعك زاد الله في مقدار حسناتك</div>";
                  } else {
                      echo "<div style='font-size:18px;font-weight:bold;' class='alert alert-danger'>لم يتم التبرع حاول مجددا من فضلك</div>";
                  }
                  $sql2="Select * from general_don WHERE id_user = '$user_id'";
                  $result2=$conn->query($sql2);
                  if($result2->num_rows>0)
                 {
                  $row2=$result2->fetch_assoc();
                  $don_value = $row2["don_value"];
                 }

                 $sql3="Select * from users WHERE id = '$user_id'";
                 $result3=$conn->query($sql3);
                 if($result3->num_rows>0)
                {
                 $row3=$result3->fetch_assoc();
                 $Initial_balance  = $row3["Initial_balance"];
                 $Total_donations  = $row3["Total_donations"];
                }

                $inc_Total_donations = $Total_donations + $don_value;
                $dec_Initial_balance = $Initial_balance - $don_value;
                $sql5="UPDATE `users` SET `Total_donations`=$inc_Total_donations,`Initial_balance`=$dec_Initial_balance WHERE `id`=$user_id";
                $q2 = mysqli_query($conn , $sql5);
                }else{
                     echo "<div style='padding-left:650px;font-size:18px;font-weight:bold;' class='alert alert-danger'>للاسف رصيدك الحالي غير كافي لهذا المقدار من التبرع</div>";
                }
                }
        ?>
              <form class="contact-form"  method="post" id="form"  role="form" autocomplete="off">
                <div class="form-group">
                  <h5 style="text-align:right; margin-right:10px;">نوع التبرع<h5>
                  <select name="donateType"  class="form-control" required>
                    <option value="#">نوع التبرع</option>
                    <option value="صدقة">صدقة </option>
                    <option value="زكاة"> زكاة</option>
                    <option value="وقف">وقف </option>
                    <option value="كفارة يمين">كفارة يمين</option>
                    <option value="كفارة صائم">كفارة صائم</option>
                    <option value="نذور او ذبائح">نذور او ذبائح</option>
                   <option value="عقيقة">عقيقة</option>
                  </select>
                </div>
                <div class="form-group">
                  <h5 style="text-align:right; margin-right:10px;">مبلغ التبرع<h5>
                  <input type="text" class="form-control"  name="public_don_amount" placeholder="ادخل مبلغ التبرع بالشيكل" required>
                </div>
                <div class="form-group">
                <input  type="submit"   name="donate" value="تبرع" class="btn py-3 px-4 btn-primary" style="margin-left:88%;width:100px;">
                </div>
              </form>
						</div>
					</div>
				</div>

          </div>
        </div>
			</div>
    </div>
		</section>
    <?php
     ?>



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
