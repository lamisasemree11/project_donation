
<?php
include("../admin/db/dbconnect.php");
global $conn;


?>
<!DOCTYPE html>
<html lang="en" dir="rtl">
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

  <link rel="stylesheet" href="css/aos.css">

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
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar" style="margin:0;">
   <div class="container d-flex align-items-center" >
   </div>
  </nav>
        <div class="container"  style="margin-top:20px;">
          <div class="row">
          <div class="col-sm-7">
  <?php
  if(isset($_GET["id_story"]))
  {
    $sql="SELECT * FROM mystory WHERE id=".$_GET["id_story"];
    $result=$conn->query($sql);
    if($result->num_rows>0)
    {
      $row=$result->fetch_assoc();
    }
  }?>

        <p style='padding-left:300px;color:black;font-size:22px;font-weight:bold;'> عنوان القصة / <?php echo $row["title"] ; ?></p><hr>

        <?php
         echo "<img style='margin-left:300px;' width='500px;' src=images/".$row["image"].'>';
         ?>
         <br>
          <p style='color:blue;font-size:20px;font-weight:bold;margin-top:30px;margin-left:500px;'>وصف القصة</p>
         <p style='color:black;font-size:20px;font-weight:bold;margin-top:30px;'><?php echo $row["story"] ; ?></p>

         <p style='color:blue;font-size:20px;font-weight:bold;margin-top:30px;margin-left:500px;'>مالك القصة</p>
         <p style='color:black;font-size:20px;font-weight:bold;margin-left:400px;'><?php echo $row["name"] ; ?></p>

         <p style='color:blue;font-size:20px;font-weight:bold;margin-top:30px;margin-left:530px;'>العنوان</p>
         <p style='color:black;font-size:20px;font-weight:bold;margin-left:500px;'><?php echo $row["address"] ; ?></p>

         <p style='color:blue;font-size:20px;font-weight:bold;margin-top:30px;margin-left:500px;'>رقم التواصل</p>
         <p style='color:black;font-size:20px;font-weight:bold;margin-left:450px;'><?php echo $row["phone"] ; ?></p>

         <p style='color:blue;font-size:20px;font-weight:bold;margin-top:30px;margin-left:420px;'>البريد الالكتروني للتواصل</p>
         <p style='color:black;font-size:20px;font-weight:bold;margin-left:400px;'><?php echo $row["email"] ; ?></p>


         <p style='color:blue;font-size:20px;font-weight:bold;margin-top:30px;margin-left:500px;'>اخر موعد للتبرع</p>
         <p style='color:black;font-size:20px;font-weight:bold;margin-left:420px;'><?php echo $row["Last_donate_date"] ; ?></p>
        <br>
</div>
                  <div class="col-sm-5">
                    <div class="panel panel-success">
                    <div class="panel-heading">
                      <div class="form-group">
                              <label style="margin-left:150px;font-size:20px;">الاشخاص المتبرعين</label>
                        </div>
                      </div>
                    <div class="panel-body">
                    <?php
                    if(isset($_GET["id_story"]))
                    {
                      $sql="SELECT * FROM don_for_story WHERE id_story=".$_GET["id_story"];
                      $n=0;
                      $result=$conn->query($sql);
                      if($result->num_rows>0)
                      {
                        while($row=$result->fetch_assoc())
                        {
                          $n++;
                          $id_user  =$row["id_user"];
                          $sql2="Select * from users where id=".$id_user;
                          $result2=$conn->query($sql2);
                          if($result2->num_rows>0){
                          $row2=$result2->fetch_assoc();}
                  echo  '     <div class="form-group">
                          <img style="margin-left:500px;" src="assets/images/user.png" alt="image" width="30px" height="30px">
                          <label style="margin-left:250px; font-size:16px;">'.$row2['name'].'</label>
                          <label style=" font-size:14px;">'.$row['don_amount'].' شيكل </label>
                      </div>
                           ';

                      }
                    }
                  }
                    ?>
                        </div>
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
