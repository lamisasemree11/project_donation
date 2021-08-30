<?php
include("header.php");
 ?>

 <section class="ftco-section"style="text-align:right;">
   <div class="container">
        <div style="margin-top:-50px;" class="row">
            <div class="col-lg-12 col-xs-12">
                <ol class="breadcrumb">
                  <li style="margin-left:40px;"><a href=<?php echo 'profile.php?id='.$row["id"];?>>البيانات الاساسية</a></li>
                  <li style="margin-left:40px;"><a style="color:red;" href="">التبرعات المضافة</a></li>
                  <li><a style="margin-left:40px;" href=<?php echo 'user_msgs.php?id='.$row["id"];?>>الرسائل المرسلة</a></li>
                  <li style="margin-left:40px;"><a href=<?php echo 'my_user_story.php?id='.$row["id"];?>>قصصي المضافة</a></li>
                  <li style="margin-left:40px;"><a href=<?php echo 'Request_blood.php?id='.$row["id"];?>>مشاريع مضافة</a></li>
                  <li><a  href=<?php echo 'update_profile.php?id='.$row["id"];?>>تغيير كلمة المرور</a></li>
                </ol>
            </div>
        </div>
        <div style="margin-bottom:50px;" class="row">
        <nav   class="col-lg-3 ftco-animate">
   <div class="sidebar-sticky">
     <ul style="margin-bottom:50px;" class="nav flex-column">

       <li class="nav-item">
         <a class="nav-link " href="index.php">
         </a>
       </li>
       <li  class="nav-item">
         <a style="color:blue;" class="nav-link" href=<?php echo 'total_donations.php?id='.$row["id"];?>>التبرع العام</a>
       </li>
       <li class="nav-item">
         <a style="color:blue;" class="nav-link" href=<?php echo 'user_gift_don.php?id='.$row["id"];?>>اهداء تبرع</a>
       </li>
       <li class="nav-item">
         <a style="color:red;" class="nav-link " href=<?php echo 'user_patient_don.php?id='.$row["id"];?>> كفالة المرضى</a>
       </li>
       <li class="nav-item">
         <a style="color:blue;" class="nav-link " href=<?php echo 'user_project_don.php?id='.$row["id"];?>> مشاريع صغيرة</a>
       </li>
       <li class="nav-item">
         <a style="color:blue;" class="nav-link " href=<?php echo 'user_story_don.php?id='.$row["id"];?>> قصص المحتاجين</a>
       </li>

     </ul>
     <hr>


   </div>
 </nav>
 					<div  class="col-lg-9 ftco-animate" >
            <section class="ftco-section contact-section">
               <div class="container">
                 <div class="row block-9 justify-content-center mb-5">
                   <div class="col-md-10 mb-md-5">
                       <?php
                             $id_patient = $_GET['id_patient'];
                              $sql="SELECT * FROM patients WHERE id=".$id_patient;
                              $result=$conn->query($sql);
                              if($result->num_rows>0)
                              {
                                $row=$result->fetch_assoc();}
                            ?>
                       <h1 class="text-center" style="color:#00bdaa;">تفاصيل المريض</h1>

                       <div class="form-group">
                         <h5 style="text-align:right; margin-right:10px;color:blue;">اسم المريض<h5>
                          <label  class="form-control"><?php echo $row["fullName"];?></label>
                       </div>

                       <div class="form-group">
                         <h5 style="text-align:right; margin-right:10px;color:blue;">هوية المريض<h5>
                          <label class="form-control"><?php echo $row["patientID"];?></label>
                       </div>
                       <div class="form-group">
                         <h5 style="text-align:right; margin-right:10px;color:blue;">الجنس<h5>
                          <label class="form-control"><?php echo $row["gender"];?></label>
                       </div>
                       <div class="form-group">
                         <h5 style="text-align:right; margin-right:10px;color:blue;">العمر<h5>
                          <label class="form-control"><?php echo $row["age"];?></label>
                       </div>
                       <div class="form-group">
                         <h5 style="text-align:right; margin-right:10px;color:blue;">نوع المرض<h5>
                          <label class="form-control"><?php echo $row["typeDisease"];?></label>
                       </div>
                       <div class="form-group">
                         <h5 style="text-align:right; margin-right:10px;color:blue;">يعاني من<h5>
                          <label class="form-control"><?php echo $row["DescriptionDisease"];?></label>
                       </div>
                       <div class="form-group">
                         <h5 style="text-align:right; margin-right:10px;color:blue;">يحتاج الى<h5>
                          <label class="form-control"><?php echo $row["need_to"];?></label>
                       </div>
                       <div class="form-group">
                         <h5 style="text-align:right; margin-right:10px;color:blue;">المستشفى<h5>
                          <label class="form-control"><?php echo $row["hospital"];?></label>
                       </div>
                       <div class="form-group">
                         <h5 style="text-align:right; margin-right:10px;color:blue;">اخر موعد للتبرع<h5>
                          <label class="form-control"><?php echo $row["last_date_donate"];?></label>
                       </div>


                   </div>
                 </div>
               </div>
             </section>
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
