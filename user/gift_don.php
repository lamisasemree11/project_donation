<?php include("header.php"); ?>

    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/gift.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">اهداء تبرع</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href=<?php echo 'pagesite.php?id='.$row["id"];?>>الرئيسية <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="http://localhost/ProjectDonation/#programs">خدماتنا <i class="ion-ios-arrow-forward"></i></a></span> <span>اهداء تبرع  <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb ftco-consult" >
			<div class="container">
				<div class="row d-flex no-gutters bg-primary align-items-stretch	consult-wrap" style="border-radius:35px;box-shadow:4px 4px 10px 4px rgba(0,0,0,.2);">
					<div class="col-mlb-1 bg-white align-items-stretch d-flex">
						<div class="ftco-animate  align-self-stretch px-4 py-5 w-100">
							<h2 class="heading-nowhite mb-4" style="text-align:center;"><span class="ion-ios-gift ml-2"></span>بطاقات الاهداء</h2>
              <?php
                $user_id = $_GET['id'];
                $Initial_balance_user =  $row["Initial_balance"];
                if(isset($_POST['gift'])){
                  $gift_amount = filter_var($_POST['don_amount'], FILTER_SANITIZE_NUMBER_INT);
                  $to_phone   = filter_var($_POST['to_phone'], FILTER_SANITIZE_STRING);
                  $to_name   = filter_var($_POST['to_name'], FILTER_SANITIZE_STRING);
                  $relation   = filter_var($_POST['relation'], FILTER_SANITIZE_STRING);
                  if($Initial_balance_user >= $gift_amount){
                  $sql = "INSERT INTO `gifts`(`id_user`, `don_amount`, `to_name`, `phone`, `relation`)
                              VALUES ('$user_id', '$gift_amount', '$to_name', '$to_phone', '$relation')";
                  $q = mysqli_query($conn , $sql);
                  if ($q) {
                      echo "<div style='padding-left:550px;font-size:18px;font-weight:bold;' class='alert alert-success'>شكرا لتقديم الهدية سيتم ارسالها الى المهدى اليه عما قريب باذن الله</div>";
                  } else {
                      echo "<div style='padding-left:650px;font-size:18px;font-weight:bold;' class='alert alert-danger'>لم يتم اضافة هديتك اعد المحاولة مجددا</div>";
                  }
                  $sql2="Select * from gifts WHERE id_user = '$user_id'";
                  $result2=$conn->query($sql2);
                  $row2=$result2->fetch_assoc();
                  $don_value = $row2["don_amount"];


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
              <form class=" contact-form" method="post"  role="form" autocomplete="off">
                <div class="form-group">
                  <h5 style="text-align:right; margin-right:10px;">مبلغ التبرع<h5>
                  <input type="number" class="form-control" name="don_amount" placeholder="الرجاء ادخال المبلغ بالشيكل" required>
                </div>
                <div class="form-group">
                  <h5 style="text-align:right; margin-right:10px;">جوال المهدى اليه<h5>
                  <input type="text" class="form-control" minlength="10" maxlength="10" name="to_phone" placeholder="جوال المهدى اليه" required>
                </div>
                <div class="form-group">
                  <h5 style="text-align:right; margin-right:10px;">اسم المهدى اليه<h5>
                  <input type="text" class="form-control" name="to_name" placeholder="اسم المهدى اليه" required>
                </div>
                <div class="form-group">
                  <h5 style="text-align:right; margin-right:10px;">نموذج الاهداء<h5>
                  <select name="relation" class="form-control" required>
                    <option value="#">---نموذج الاهداء---</option>
                    <option value="الى امي">الى امي</option>
                    <option value="الى ابي">الى ابي</option>
                    <option value="الى مولود">الى مولود </option>
                    <option value="الى اخي">الى اخي </option>
                    <option value="الى اختي">الى اختي </option>
                    <option value="الى زوجي">الى زوجي </option>
                    <option value="الى زوجتي">الى زوجتي </option>
                    <option value="الى صديق">الى صديق</option>
                  </select>
                </div>

                <div class="form-group">
                <input type="submit" name="gift" value="اهداء" class="btn py-3 px-4 btn-primary" style="width:100%;">
                </div>
              </form>
						</div>
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

  </body>
</html>
