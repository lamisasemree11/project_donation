<?php
include("header.php");

 ?>
  <section  class="hero-wrap hero-wrap-2"  style="background-image: url('images/don.jpg');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-2 bread">مشاريع صغيرة</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href=<?php echo 'pagesite.php?id='.$row["id"];?>>الرئيسية <i class="ion-ios-arrow-forward"></i></a></span> <span>مشاريع صغيرة<i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>
  <div class="container"  style='margin-top:70px;' >
    <h3 class="text-primary" style="text-align:right;">النتائج</h3><hr>
    <?php
      $user_id = $_GET['id'];
      $Initial_balance_user =  $row["Initial_balance"];
      if(isset($_POST['don_for_project'])){
        $project_don_amount = filter_var($_POST['project_don_amount'], FILTER_SANITIZE_NUMBER_INT);
        $id_project = filter_var($_POST['id_project'], FILTER_SANITIZE_NUMBER_INT);
        if($Initial_balance_user >= $project_don_amount){
        global $conn;
        $sql2 = "INSERT INTO `don_for_project`(`id_user`, `id_project`, `don_amount`)  VALUES ('$user_id', '$id_project', '$project_don_amount')";
        $q2 = mysqli_query($conn , $sql2);
        if ($q2) {
            echo "<div style='padding-left:700px;font-size:18px;font-weight:bold;' class='alert alert-success'>شكرا لك لتبرعك زاد الله في مقدار حسناتك</div>";
        } else {
            echo "<div style='font-size:18px;font-weight:bold;' class='alert alert-danger'>لم يتم التبرع حاول مجددا من فضلك</div>";
        }
        $sql9="Select * from smallproject WHERE project_id = '$id_project' ";
        $result9=$conn->query($sql9);
        if($result9->num_rows>0)
        {
        $row9=$result9->fetch_assoc();
        $total = $row9["Amount_paid"];
        }
        $inc_TheAmountPaid  = $total + $project_don_amount;
        $sql7="UPDATE `smallproject` SET `Amount_paid`=$inc_TheAmountPaid WHERE `project_id`=$id_project";
        $q7 = mysqli_query($conn , $sql7);

        $Initial_balance  = $row["Initial_balance"];
        $Total_donations  = $row["Total_donations"];


        $inc_Total_donations = $Total_donations + $project_don_amount;
        $dec_Initial_balance = $Initial_balance - $project_don_amount;
        $sql5="UPDATE `users` SET `Total_donations`=$inc_Total_donations,`Initial_balance`=$dec_Initial_balance WHERE `id`=$user_id";
        $q2 = mysqli_query($conn , $sql5);
      }else{
           echo "<div style='padding-left:700px;font-size:18px;font-weight:bold;' class='alert alert-danger'>للاسف رصيدك الحالي غير كافي لهذا المقدار من التبرع</div>";
      }
      }
?>
      <div class="row" id="feedback" >
        <?php
     $sql2="Select * from smallproject";
     $result2=$conn->query($sql2);
    $n=0;
    if($result2->num_rows>0)
    {
      while($row2=$result2->fetch_assoc())
      {
        $TotalِAmount = $row2['Total_amount'];
        $TheAmountPaid = $row2['Amount_paid'];
        $n++;
          if($row2["project_status"]==1 && $TotalِAmount != $TheAmountPaid ){
            $x = $row2['Total_amount'];
            $y = $row2['Amount_paid'];
            $z = $x - $y;
            echo '
            <div class="col-md-3  ftco-animate" >
              <div class="staff border">
                <div class="img-wrap d-flex align-items-stretch">
                  <div class="img align-self-stretch" style="background-image: url(images/'.$row2["project_img"].');"></div>
                </div>
                <div class="text text-center">
                	<form  method="POST">
                  <a target="_blank" href="smallProject_page.php?id='.$_GET['id']."&id_project=".$row2['project_id'].'" class="text-center" style="color:green; font-size:18px;">'.$row2['project_title'].'</a><br>
                  <p  style="color:black; font-size:18px;">'.substr($row2['project_Desc'],0,100).'....</p><hr>';
                  echo		"<label  style='color:black; font-size:18px;'>الاجمالي:</label>";
                  echo		 "<label style='color:black; font-size:18px;'>".$row2['Total_amount']." شيكل </label><br>";
                  echo	"	<label style='color:black; font-size:18px;'>المدفوع:</label>";
                  echo		"<label style='color:black; font-size:18px;'>".$row2['Amount_paid']." شيكل </label><br>";
                  echo		"<label style='color:black; font-size:18px;' >المتبقي:</label>";
                  echo		"<label style='color:black; font-size:18px;'>".$z." شيكل </label><hr>";
                  echo		"<label style='color:black; font-size:16px;' >اخر موعد للتبرع : </label>";
       						echo		"<label style='color:black; font-size:16px;' >".$row2['Last_donate_date']."</label><hr>";
                  echo		"<label style='color:black; font-size:18px;' >مبلغ التبرع : </label>";
                  echo ' <input name="project_don_amount" type="text" style="margin-bottom:20px;" >';
                  echo' <input name="id_project" type="hidden" value='.$row2['project_id'].'>';
                 echo ' <input type="submit" style="margin-right:30px;margin-bottom:20px;"   name="don_for_project" value="تبرع " class="btn py-3 px-5 btn-primary" >
                </form>
                </div>
              </div>
            </div> ';
          }



   }
   }
   ?>

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
