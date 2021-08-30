<?php

include("../admin/db/dbconnect.php");
global $conn;
if(isset($_GET["id"]))
{
  $sql="SELECT * FROM users WHERE id=".$_GET["id"];
  $result=$conn->query($sql);
  if($result->num_rows>0)
  {
    $row=$result->fetch_assoc();
}
}

 ?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <title>كنوز الخير</title>
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">


  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">



  <link rel="stylesheet" href="css/ionicons.min.css">

  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/icomoon.css">
  <link rel="stylesheet" href="css/bootstrap-rtl.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">



</head>
<body>
  <div class="bg-top navbar-light d-flex flex-column-reverse">
    <div class="container py-3">
      <div class="row no-gutters d-flex align-items-center align-items-stretch">
        <div class="col-md-4 d-flex align-items-center py-4">
          <a class="navbar-brand" href="index.html">كنوز  الخير<span>موقع التبرعات الالكتروني</span></a>
        </div>
        <div class="col-lg-8 d-block">
          <div class="row d-flex">
            <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
              <div class="icon d-flex justify-content-center align-items-center"><span class="ion-ios-paper-plane"></span></div>
              <div class="text">
                <span style="text-align:right;">البريد الالكتروني</span>
                <span>youremail@email.com</span>
              </div>
            </div>
            <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
              <div class="icon d-flex justify-content-center align-items-center"><span class="ion-ios-call"></span></div>
              <div class="text">
                <span style="text-align:right;">رقم الجوال</span>
                <span>+123 523 5598</span>
              </div>
            </div>
            <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
              <div class="icon d-flex justify-content-center align-items-center"><span class="ion-ios-map"></span></div>
              <div class="text">
                <span style="text-align:right;">العنوان</span>
                <span> 198 West 21th Street, Suite 721 New York NY 10016</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <nav style="margin-bottom:-10px;" class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container d-flex align-items-center">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul  class="navbar-nav mr-auto navbar-nav navbar-nav-right">
          <li style="margin-left:-40px;" class="nav-item nav-profile dropdown">
          <div id="profileDropdown" class="nav-profile-img nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            <img width="30px" height="30px" src="assets/images/user.png" alt="image">
            <span class="availability-status online"></span>
          </div>
          <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
            <a class="dropdown-item" href=<?php echo 'profile.php?id='.$row["id"];?> >
              <i class="mdi mdi-cached mr-2 text-success"></i> البروفايل </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="logout.php">
                <i class="mdi mdi-cached mr-2 text-primary"></i>تسجيل الخروج</a>
          </div>
        </a>
      </li>
      <li class="nav-item "><a style="color:blue;font-size:20px;" href="#" class="nav-link"><?php echo $row["name"];?></a></li>
      <li class="nav-item "><a href=<?php echo 'pagesite.php?id='.$row["id"];?>  class="nav-link">الرئيسية</a></li>
      <li class="nav-item"><a href="#programs" class="nav-link">برامجنا</a></li>
      <li class="nav-item"><a href=<?php echo 'contact.php?id='.$row["id"];?>  class="nav-link">تواصل معنا</a></li>
     <li class="nav-item"><a href=<?php echo 'MyStory.php?id='.$row["id"];?>  class="nav-link">انشر قصتي</a></li>
     <li class="nav-item"><a href=<?php echo 'MyProject.php?id='.$row["id"];?>   class="nav-link">انشر مشروعي</a></li>
        </ul>
      </div>
    </div>
  </nav>



  <section  class="hero-wrap hero-wrap-2"  style="background-image: url('images/patient.jpg');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-2 bread">كفالة المرضى</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">الرئيسية <i class="ion-ios-arrow-forward"></i></a></span> <span>كفالة المرضى<i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>

<div class="container"  style='margin-top:70px;' >
	<div class="row" style="text-align:right;">

    <div class="col-sm-12" id="feedback" >
      <h3 class="text-primary" style="text-align:right;">النتائج</h3><hr>
      <?php
        $user_id = $_GET['id'];
        $Initial_balance_user =  $row["Initial_balance"];
        if(isset($_POST['don_for_patient'])){
          $patient_don_amount = filter_var($_POST['patient_don_amount'], FILTER_SANITIZE_NUMBER_INT);
          $id_patient = filter_var($_POST['id_patient'], FILTER_SANITIZE_NUMBER_INT);
          if($Initial_balance_user >= $patient_don_amount){
          global $conn;
          $sql2 = "INSERT INTO `don_for_patients`(`id_user`, `id_patient`, `don_value`)  VALUES ('$user_id', '$id_patient', '$patient_don_amount')";
          $q2 = mysqli_query($conn , $sql2);
          if ($q2) {
              echo "<div style='padding-left:700px;font-size:18px;font-weight:bold;' class='alert alert-success'>شكرا لك لتبرعك زاد الله في مقدار حسناتك</div>";
          } else {
              echo "<div style='font-size:18px;font-weight:bold;' class='alert alert-danger'>لم يتم التبرع حاول مجددا من فضلك</div>";
          }
          $sql9="Select * from patients WHERE id = '$id_patient' ";
          $result9=$conn->query($sql9);
          if($result9->num_rows>0)
          {
          $row9=$result9->fetch_assoc();
          $total = $row9["TheAmountPaid"];
          }

          $inc_TheAmountPaid  = $total + $patient_don_amount;
          $sql7="UPDATE `patients` SET `TheAmountPaid`=$inc_TheAmountPaid WHERE `id`=$id_patient";
          $q7 = mysqli_query($conn , $sql7);

          $Initial_balance  = $row["Initial_balance"];
          $Total_donations  = $row["Total_donations"];


          $inc_Total_donations = $Total_donations + $patient_don_amount;
          $dec_Initial_balance = $Initial_balance - $patient_don_amount;
          $sql5="UPDATE `users` SET `Total_donations`=$inc_Total_donations,`Initial_balance`=$dec_Initial_balance WHERE `id`=$user_id";
          $q2 = mysqli_query($conn , $sql5);
        }else{
             echo "<div style='font-size:18px;font-weight:bold;' class='alert alert-danger'>للاسف رصيدك الحالي غير كافي لهذا المقدار من التبرع</div>";
        }
        }
  ?>
      <?php
      if(isset($_POST['search'])){
      $typeDisease = $_POST['typeDisease'];
      $TotelAount  = $_POST['TotelAount'];
      $sql3 = "SELECT * FROM patients WHERE TotalِAmount = '$TotelAount' OR typeDisease = '$typeDisease'";
       	$result3=$conn->query($sql3);
       	$n=0;
       	if($result3->num_rows>0)
       	{
       		while($row3=$result3->fetch_assoc())
       		{
       			$TotalِAmount = $row3['TotalِAmount'];
       			$TheAmountPaid = $row3['TheAmountPaid'];
       			$RemainingِAmount = $TotalِAmount - $TheAmountPaid;
       			$n++;
       				if($row3["status"]==0 && $TotalِAmount != $TheAmountPaid ){
       					echo '
       					<div class="col-md-3" >
       					<div class="panel panel-primary">
       							<div class="panel-heading">
       				  '	;

       						echo "<h4>".$row3['typeDisease']."</h4>";
       						echo '</div>
       						<div class="panel-body">
       							<form  method="POST">'

       									;
       				    echo "<label> يعاني من :</label>";
       						echo "<label>".$row3['DescriptionDisease']."</label><br>";
       						echo		" <label > يحتاج الى :</label>";
       						echo		 "<label>".$row3['need_to']."</label><hr>";
       					  echo		"<label >الاجمالي:</label>";
       						echo		 "<label>".$row3['TotalِAmount']." شيكل </label><br>";
       					  echo	"	<label>المدفوع:</label>";
       						echo		"<label>".$row3['TheAmountPaid']." شيكل </label><br>";
       						echo		"<label >المتبقي:</label>";
       						echo		"<label>".$RemainingِAmount." شيكل </label><hr>";
       						echo		"<label >اخر موعد للتبرع : </label>";
       						echo		"<label>".$row3['last_date_donate']."</label><hr>";
                   echo		"<label >مبلغ التبرع : </label>";
                   echo ' <input name="patient_don_amount" type="text" style="margin-right:30px;margin-bottom:20px;" >';
                   echo' <input name="id_patient" type="hidden" value='.$row3['id'].'>';

       						echo ' <input type="submit" style="margin-right:70px;margin-bottom:20px;"   name="don_for_patient" value="تبرع " class="btn py-3 px-5 btn-primary" >
       								</form>
       							</div>
       					</div>

       					</div>';

       				}

       }
       }
     }
       echo "</div>";
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
