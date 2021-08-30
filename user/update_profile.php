<?php
include("header.php");
 ?>

    <div class="container"  style='margin-top:50px;' >
      <div class="row" style="text-align:right;">
        <nav   class="col-md-4 d-none d-md-block  sidebar">
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
         <a style="color:blue;" class="nav-link " href=<?php echo 'my_user_story.php?id='.$row["id"];?> >  قصصي المضافة</a>
       </li>
       <li class="nav-item">
         <a style="color:blue;" class="nav-link " href=<?php echo 'my_user_project.php?id='.$row["id"];?>> مشاريع مضافة</a>
       </li>
       <li class="nav-item">
         <a style="color:red;" class="nav-link " href=<?php echo 'update_profile.php?id='.$row["id"];?>> تغيير كلمة المرور</a>
       </li>


     </ul>
     <hr>


   </div>
 </nav>
 					<div class="col-md-6" >
            <section class="ftco-section contact-section">
               <div class="container">
                 <div class="row block-9 justify-content-center mb-5">
                   <div class="col-md-10 mb-md-5">
                     <?php
                         $id_user = $_GET['id'];
                       if(isset($_POST['submit'])){
                         $pass   = filter_var($_POST['pass'], FILTER_SANITIZE_STRING);
                         $sql = "UPDATE users SET password='$pass' where id='$id_user'";

                         $q = mysqli_query($conn , $sql);
                         if ($q) {
                             echo "<div style='padding-left:250px;font-size:18px;font-weight:bold;' class='alert alert-success'>تم تعديل كلمة المرور</div>";
                         } else {
                             echo "<div style='padding-left:300px;font-size:18px;font-weight:bold;' class='alert alert-danger'>لم يتم التعديل اعد المحاولة مجددا</div>";
                         }
                       }
                     ?>
                     <form class="border border-nowhite p-5 contact-form" method="post"  role="form" autocomplete="off">
                       <h1 class="text-center" style="color:#00bdaa;">تعديل كلمة المرور</h1>

                       <div class="form-group">
                         <h5 style="text-align:right; margin-right:10px;">كلمة المرور الجديدة<h5>
                         <input type="text" class="form-control" name="pass"  placeholder="<?php echo $row["password"];?>" >
                       </div>

                       <div class="form-group">
                         <input type="submit"   name="submit" value="تعديل" class="btn py-3 px-4 btn-primary" style="width:100%;">
                       </div>
                     </form>
                   </div>
                 </div>
               </div>
             </section>
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
