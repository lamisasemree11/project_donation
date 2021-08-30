<?php
include("header.php");
 ?>

    <div class="container"  style='margin-top:50px;' >
      <div class="row" style="text-align:right;">
        <nav   class="col-md-3 d-none d-md-block  sidebar">
   <div class="sidebar-sticky">
     <ul style="margin-bottom:50px;" class="nav flex-column">

       <li  class="nav-item">
         <a style="color:blue;" class="nav-link" href=<?php echo 'profile.php?id='.$row["id"];?>>البيانات الاساسية</a>
       </li>
       <li class="nav-item">
         <a style="color:blue;" class="nav-link" href=<?php echo 'total_donations.php?id='.$row["id"];?>>التبرعات التي قمت بها</a>
       </li>
       <li class="nav-item">
         <a style="color:blue;"  class="nav-link " href=<?php echo 'user_msgs.php?id='.$row["id"];?>  >الرسائل المرسلة</a>
       </li>
       <li class="nav-item">
         <a style="color:blue;" class="nav-link " href=<?php echo 'my_user_story.php?id='.$row["id"];?>>  قصصي المضافة</a>
       </li>
       <li class="nav-item">
         <a style="color:red;" class="nav-link " href=<?php echo 'my_user_project.php?id='.$row["id"];?>> مشاريع مضافة</a>
       </li>
       <li class="nav-item">
         <a style="color:blue;" class="nav-link " href=""> تغيير كلمة المرور</a>
       </li>

     </ul>
     <hr>


   </div>
 </nav>
 <div style="margin-top:50px;" class="col-lg-9 ftco-animate" >
           <?php
             $sql="Select * from smallproject where project_id=".$_GET["id_project"];
             $result=$conn->query($sql);
             $n=0;
             if($result->num_rows>0)
             {
               $row=$result->fetch_assoc();
             }
             ?>
                  <p style='padding-left:500px;color:black;font-size:22px;font-weight:bold;'><?php echo $row["project_title"] ; ?></p><hr>

                  <?php
                   echo "<img  width='300px;' src=images/".$row["project_img"].'>';
                   ?>
                   <br>
                   <p style='color:black;font-size:20px;font-weight:bold;margin-top:30px;'><?php echo $row["project_Desc"] ; ?></p>
                   <p style='color:blue;font-size:20px;font-weight:bold;margin-top:30px;'>مالك المشروع</p>
                   <p style='color:black;font-size:20px;font-weight:bold;'><?php echo $row["project_owner"] ; ?></p>
                   <p style='color:blue;font-size:20px;font-weight:bold;margin-top:30px;'>العنوان</p>
                   <p style='color:black;font-size:20px;font-weight:bold;'><?php echo $row["address"] ; ?></p>
                   <p style='color:blue;font-size:20px;font-weight:bold;margin-top:30px;'>رقم التواصل</p>
                   <p style='color:black;font-size:20px;font-weight:bold;'><?php echo $row["phone"] ; ?></p>
                   <p style='color:blue;font-size:20px;font-weight:bold;margin-top:30px;'>البريد الالكتروني للتواصل</p>
                   <p style='color:black;font-size:20px;font-weight:bold;'><?php echo $row["email"] ; ?></p>
                   <p style='color:blue;font-size:20px;font-weight:bold;margin-top:30px;'>المبلغ الاجمالي للمشروع</p>
                   <p style='color:black;font-size:20px;font-weight:bold;'><?php echo $row["Total_amount"] ; ?> شيكل </p>
                   <p style='color:blue;font-size:20px;font-weight:bold;margin-top:30px;'>اخر موعد للتبرع</p>
                   <p style='color:black;font-size:20px;font-weight:bold;'><?php echo $row["Last_donate_date"] ; ?></p>
            <br>





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
