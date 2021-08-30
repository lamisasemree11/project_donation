
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
 <div  class="col-lg-9 ftco-animate" >
   <section class="ftco-section contact-section">
      <div class="container">
        <div class="row block-9 justify-content-center mb-5">
          <div class="col-md-10 mb-md-5">
            <?php
                $id_story = $_GET['id_story'];
              if(isset($_POST['submit'])){
                $storyTitle   = filter_var($_POST['storyTitle'], FILTER_SANITIZE_STRING);
                $storyDesc   = filter_var($_POST['storyDesc'], FILTER_SANITIZE_STRING);
                $storyOwner   = filter_var($_POST['storyOwner'], FILTER_SANITIZE_STRING);
                $phone   = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
                $email   = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
                $money   = filter_var($_POST['money'], FILTER_SANITIZE_STRING);
                $address   = filter_var($_POST['address'], FILTER_SANITIZE_STRING);
                $theLastDate   = filter_var($_POST['theLastDate'], FILTER_SANITIZE_STRING);
                global $conn;

                $sql = "UPDATE mystory SET title='$storyTitle',story='$storyDesc',name='$storyOwner',phone='$phone',email='$email',
                money='$money',address='$address',Last_donate_date='$theLastDate' where id='$id_story'";

                $q = mysqli_query($conn , $sql);
                if ($q) {
                    echo "<div style='padding-left:300px;font-size:18px;font-weight:bold;' class='alert alert-success'>تم تعديل قصتك انتظر الرد من مسؤول النظام</div>";
                } else {
                    echo "<div style='padding-left:300px;font-size:18px;font-weight:bold;' class='alert alert-danger'>لم يتم التعديل اعد المحاولة مجددا</div>";
                }
              }
            ?>
            <form class="border border-nowhite p-5 contact-form" method="post"  role="form" autocomplete="off">
              <?php

                     $sql="SELECT * FROM mystory WHERE id=".$id_story;
                     $result=$conn->query($sql);
                     if($result->num_rows>0)
                     {
                       $row=$result->fetch_assoc();}
                   ?>
              <h1 class="text-center" style="color:#00bdaa;">قصتي</h1>

              <div class="form-group">
                <h5 style="text-align:right; margin-right:10px;">عنوان القصة<h5>
                <input type="text" class="form-control" name="storyTitle"  placeholder="<?php echo $row["title"];?>" >
              </div>
              <div class="form-group">
                <h5 style="text-align:right; margin-right:10px;">وصف القصة<h5>
                <textarea name="storyDesc" placeholder="<?php echo $row["story"];?>"   cols="30" rows="7" class="form-control"  ></textarea>
              </div>
              <div class="form-group">
                  <h5 style="text-align:right; margin-right:10px;">اسم مالك القصة<h5>
                <input type="text" class="form-control" name="storyOwner"  placeholder="<?php echo $row["name"];?>" >
              </div>
              <div class="form-group">
                <h5 style="text-align:right; margin-right:10px;">رقم الجوال-الهاتف<h5>
                <input type="text" class="form-control" minlength="10" maxlength="10" name="phone"  placeholder="<?php echo $row["phone"];?>" >
              </div>
              <div class="form-group">
                <h5 style="text-align:right; margin-right:10px;">البريد الالكتروني للتواصل<h5>
                <input type="email" class="form-control" name="email"  placeholder="<?php echo $row["email"];?>" >
              </div>
              <div class="form-group">
                <h5 style="text-align:right; margin-right:10px;">مبلغ المحتاج اليه<h5>
                <input type="number" class="form-control" name="money"  placeholder="<?php echo $row["money"];?> شيكل " >
              </div>
              <div class="form-group">
                <h5 style="text-align:right; margin-right:10px;">عنوان صاحب القصة<h5>
                <input type="text" class="form-control" name="address"  placeholder="<?php echo $row["address"];?>" >
              </div>
              <div class="form-group">
                <h5 style="text-align:right; margin-right:10px;">اخر موعد للتبرع<h5>
                <input type="date" class="form-control" name="theLastDate"  placeholder="<?php echo $row["Last_donate_date"];?>"  >
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
