<?php
include("header.php");
 ?>

    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/contactus.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">تواصل معنا</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">الرئيسية <i class="ion-ios-arrow-forward"></i></a></span> <span>تواصل معنا <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

		<section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex mb-5 contact-info justify-content-center">
        	<div class="col-md-10">
        		<div class="row mb-5">
		          <div class="col-md-4 text-center d-flex">
		          	<div class="border border-nowhite w-100 p-4">
			          	<div class="icon">
			          		<span class="icon-map-o"></span>
			          	</div>
			            <p><span>العنوان:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
			          </div>
		          </div>
		          <div class="col-md-4 text-center d-flex">
		          	<div class="border border-nowhite w-100 p-4">
			          	<div class="icon">
			          		<span class="icon-tablet"></span>
			          	</div>
			            <p><span>رقم الجوال:</span> Call us: + 1235 2355 98</p>
			          </div>
		          </div>
		          <div class="col-md-4 text-center d-flex">
		          	<div class="border border-nowhite w-100 p-4">
			          	<div class="icon">
			          		<span class="icon-envelope-o"></span>
			          	</div>
			            <p><span>البريد الالكتروني:</span> info@yoursite.com</p>
			          </div>
		          </div>
		        </div>
          </div>
        </div>
        <div class="row block-9 justify-content-center mb-5">
          <div class="col-md-10 mb-md-5">
            <form class="border border-nowhite p-5 contact-form" method="post"  role="form" autocomplete="off">
              <h1 class="text-center" style="color:#00bdaa;">اقتراحات وشكاوي</h1>
              <?php
              $user_id = $_GET['id'];
  				     	if(isset($_POST["submit"]))
  				     	{
                 $title  = filter_var($_POST['title'], FILTER_SANITIZE_STRING);
                 $type   = filter_var($_POST['type'], FILTER_SANITIZE_STRING);
                 $msg   = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
                  $sql = "INSERT INTO `contact`(`id_user`, `title`, `type`, `desc_msg`)
                              VALUES ('$user_id', '$title', '$type', '$msg')";

  					  	if($conn->query($sql))
  				      {
  				      	echo '
  				        	<div class="alert alert-success" style="text-align:right;">
  					       	<a href="#" style="margin-left:10px;" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  						      تم ارسال رسالتك بنجاح.
  				        	</div>

  				        	';
  			      	}
  			    		}
  			    	?>
              <div class="form-group">
                <h5 style="text-align:right; margin-right:10px;">عنوان الرسالة<h5>
                <input type="text" class="form-control" name="title" placeholder="ادخل عنوان الرسالة" required>
              </div>
              <div class="form-group">
                <h5 style="text-align:right; margin-right:10px;">نوع الرسالة<h5>
                <select name="type" class="form-control" required>
                  <option value="#">---نوع الرسالة---</option>
                  <option value="اقتراح">اقتراح</option>
                  <option value="شكوى">شكوى</option>
                </select>
              </div>
              <div class="form-group">
                <h5 style="text-align:right; margin-right:10px;">الرسالة<h5>
                <textarea name="message"  cols="30" rows="7" class="form-control" placeholder="" required></textarea>
              </div>
              <div class="form-group">
                <input type="submit"  name="submit" value="ارسال" class="btn py-3 px-4 btn-primary" style="width:100%;">
              </div>
            </form>

          </div>
        </div>
      </div>
    </section>


        <footer class="ftco-footer ftco-bg-dark ftco-section" style="text-align:right;">
          <div class="container">
            <div class="row mb-5">
              <div class="col-md-4">
                <div class="ftco-footer-widget mb-5">
                	<h2 class="ftco-heading-2">معلومات التواصل</h2>
                	<div class="block-23 mb-3">
    	              <ul>
    	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
    	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
    	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
    	              </ul>
    	            </div>
    	            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-4 ">
                <div class="ftco-footer-widget mb-5 ml-md-4" style="text-align:center;">
                  <h2 class="ftco-heading-2" >روابط</h2>
                  <ul class="list-unstyled">
                    <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>الرئيسية</a></li>
                    <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>من نحن</a></li>
                    <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>برامجنا</a></li>
                    <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>تواصل معنا</a></li>

                  </ul>
                </div>
              </div>

              <div class="col-md-4 ">
                <div class="ftco-footer-widget mb-5">
                	<h2 class="ftco-heading-2"> اشترك معنا!</h2>
                  <form action="#" class="subscribe-form">
                    <div class="form-group">
                      <input type="text" class="form-control mb-2 text-center" placeholder="ادخل البريد الالكتروني">
                      <input type="submit" value="اشترك" class="form-control submit px-3">
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 text-center">

                <p>جميع الحقوق محفوظة لموقعنا الخاص في تقديم الخدمات الصحية التطوعية الخيرية <i class="icon-heart" aria-hidden="true"></i>
      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
              </div>
            </div>
          </div>
        </footer>



      <!-- loader -->
      <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


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
