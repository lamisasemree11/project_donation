<?php
include("header.php");
 ?>

    <div class="container"  style='margin-top:50px;' >
      <div class="row" style="text-align:right;">
        <nav   class="col-md-4 d-none d-md-block  sidebar">
   <div class="sidebar-sticky">
     <ul style="margin-bottom:50px;" class="nav flex-column">

       <li  class="nav-item">
         <a style="color:red;" class="nav-link" href=<?php echo 'profile.php?id='.$row["id"];?>>البيانات الاساسية</a>
       </li>
       <li class="nav-item">
         <a style="color:blue;" class="nav-link" href=<?php echo 'total_donations.php?id='.$row["id"];?>>التبرعات التي قمت بها</a>
       </li>
       <li class="nav-item">
         <a style="color:blue;"  class="nav-link " href=<?php echo 'user_msgs.php?id='.$row["id"];?>  >الرسائل المرسلة</a>
       </li>
       <li class="nav-item">
         <a style="color:blue;" class="nav-link " href=<?php echo 'my_user_story.php?id='.$row["id"];?> >  قصصي المضافة</a>
       </li>
       <li class="nav-item">
         <a style="color:blue;" class="nav-link " href=<?php echo 'my_user_project.php?id='.$row["id"];?>> مشاريع مضافة</a>
       </li>
       <li class="nav-item">
         <a style="color:blue;" class="nav-link " href=<?php echo 'update_profile.php?id='.$row["id"];?>> تغيير كلمة المرور</a>
       </li>


     </ul>
     <hr>


   </div>
 </nav>
 					<div class="col-md-6" >
 					<div class="panel panel-primary">
 							<div class="panel-heading">


 					<p style='padding-right:200px;padding-top:20px;color:black;font-size:20px;font-weight:bold;'>البيانات الاساسية</p><hr>
 						</div>
 						<div class="panel-body">
 				    <label style='padding:10px;color:blue;font-size:18px;'>اسم المستخدم</label>
 						<label style='padding-right:50px;color:black;font-size:15px;'><?php echo $row["name"];?></label><br>

 					  <label style='padding:10px;color:blue;font-size:18px;'>البريد الالكتروني</label>
 					  <label style='padding-right:30px;color:black;font-size:15px;'><?php echo $row["email"];?> </label><br>

 					  <label style='padding:10px;color:blue;font-size:18px;'>كلمة السر</label>
 					  <label style='padding-right:70px;color:black;font-size:15px;'> <?php echo $row["password"];?></label><br>

 					  <label style='padding:10px;color:blue;font-size:18px;'>رقم الجوال</label>
 						<label style='padding-right:60px;color:black;font-size:15px;'> <?php echo $row["phonenumber"];?></label><br>

            <label style='padding:10px;color:blue;font-size:18px;'>رصيدك الاولي</label>
            <label style='padding-right:40px;color:black;font-size:15px;'> <?php echo $row["first_balance"];?> شيكل </label><br>

            <label style='padding:10px;color:blue;font-size:18px;'>اجمالي التبرعات</label>
  					<label style='padding-right:40px;color:black;font-size:15px;'> <?php echo $row["Total_donations"];?> شيكل </label><br>

           <label style='padding:10px;color:blue;font-size:18px;'>رصيدك المتبقي</label>
    				<label style='padding-right:40px;color:black;font-size:15px;'> <?php echo $row["Initial_balance"];?> شيكل </label><br>
 						</div>
 					</div>

 					</div>

  </div>

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
