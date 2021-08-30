<?php
include("db/dbconnect.php");
global $conn;
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>كنوز الخير - مسؤول النظام</title>
  <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">

  <link rel="stylesheet" href="assets/css/bootstrap-rtl.css">
  <link rel="stylesheet" href="assets/css/style.css">

  <link rel="shortcut icon" href="assets/images/favicon.png" />
  <style media="screen">
    body{
      background-color: #DCDCDC;
    }

  </style>
</head>
  <body>

  <div class="bg-top navbar-light d-flex flex-column-reverse" >

      <div class="container py-3">
        <div class="row no-gutters d-flex align-items-center align-items-stretch">
          <div class="col-md-4 d-flex align-items-center py-4">
            <a class="navbar-brand" style="color:blue;padding-left:50px;font-size:35px;" href="">كنوز الخير</a>
          </div>
          <div class="col-lg-8 d-block">
            <div class="row d-flex">

            </div>
          </div>
        </div>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg  " id="ftco-navbar" style="background-color:#4682B4;" >
      <div class="container d-flex align-items-center" >

        <div class="collapse navbar-collapse" id="ftco-nav" >

          <ul  class="navbar-nav mr-auto" style="margin-left:100px;">
            <li class="nav-item" ><a href="admin.php" class="nav-link" style="margin-left:10px;color:white;font-size:18px;">الرئيسية</a></li>
            <li class="nav-item"><a href="users.php" class="nav-link" style="margin-left:10px;color:white;font-size:18px;">المستخدمين</a></li>
            <li class="nav-item"><a href="donations.php" class="nav-link" style="margin-left:10px;color:white;font-size:18px;">التبرعات</a></li>
            <li class="nav-item"><a href="msg.php" class="nav-link" style="margin-left:10px;color:white;font-size:18px;">الرسائل</a></li>
           <li class="nav-item"><a href="comment.php" class="nav-link" style="margin-left:10px;color:white;font-size:18px;">التعليقات</a></li>
           <li class="nav-item"><a href="blood_don.php" class="nav-link" style="margin-left:10px;color:white;font-size:18px;">التبرع بالدم</a></li>
            <li class="nav-item"><a href="patients.php" class="nav-link" style="margin-left:10px;color:white;font-size:18px;">كفالة المرضى</a></li>
            <li class="nav-item"><a href="small_Project.php" class="nav-link" style="margin-left:10px;color:white;font-size:18px;">مشاريع صغيرة</a></li>
           <li class="nav-item"><a href="poor_story.php" class="nav-link" style="margin-left:10px;color:white;font-size:18px;">قصص الفقراء</a></li>
           <li class="nav-item"><a href="" class="nav-link" style="margin-left:10px;color:white;font-size:18px;">الدردشة</a></li>
           <li class="nav-item"><a href="logout.php" class="nav-link" style="margin-left:10px;color:white;font-size:18px;">خروج</a></li>

          </li>
          </ul>

        </div>
      </div>
    </nav>
<div class="container"  style="text-align:right;margin-top:50px;">
                  <form  class="form-sample">
                    <div class="row">
                      <?php
                      $sql="Select * from general_don";
                      $result=$conn->query($sql);
                      $n=0;
                      $total_don = 0;
                      if($result->num_rows>0)
                      {
                        while($row=$result->fetch_assoc())
                        {
                          $n++;
                          $status =$row["status_don"];
                        if($status == 1){
                          $don_value =$row["don_value"];
                          $total_don = $total_don + $don_value;}
}}
                    ?>
                      <div class="col-md-4 stretch-card grid-margin">
                        <div class="card bg-gradient-danger card-img-holder text-white">
                          <div class="card-body">
                            <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                            <h3 class="font-weight-normal mb-3">اجمالي التبرعات العامة<i class="mdi mdi-chart-line mdi-24px float-left"></i>
                            </h3>
                            <h3  class="mb-5"><?php echo "$total_don"; ?> شيكل</h3>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 stretch-card grid-margin">
                        <?php
                        $sql="Select * from don_for_patients";
                        $result=$conn->query($sql);
                        $n=0;
                        $total_don_p = 0;
                        if($result->num_rows>0)
                        {
                          while($row=$result->fetch_assoc())
                          {
                            $n++;
                            $status =$row["status_don"];
                          if($status == 1){
                            $don_value =$row["don_value"];
                            $total_don_p = $total_don_p + $don_value;}
  }}
                      ?>
                        <div class="card bg-gradient-info card-img-holder text-white">
                          <div class="card-body">
                            <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                            <h3 class="font-weight-normal mb-3">اجمالي تبرعات المرضى<i class="mdi mdi-chart-line mdi-24px float-left"></i>
                            </h3>
                            <h3 class="mb-5"><?php echo "$total_don_p"; ?> شيكل</h3>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 stretch-card grid-margin">
                        <?php
                        $sql="Select * from don_for_project";
                        $result=$conn->query($sql);
                        $n=0;
                        $total_don_pro = 0;
                        if($result->num_rows>0)
                        {
                          while($row=$result->fetch_assoc())
                          {
                            $n++;
                            $status =$row["status_don"];
                          if($status == 1){
                            $don_value =$row["don_amount"];
                            $total_don_pro = $total_don_pro + $don_value;}
  }}
                      ?>
                        <div class="card bg-gradient-success card-img-holder text-white">
                          <div class="card-body">
                            <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                            <h3 class="font-weight-normal mb-3">اجمالي تبرعات المشاريع<i class="mdi mdi-chart-line mdi-24px float-left"></i>
                            </h3>
                            <h3 class="mb-5"><?php echo "$total_don_pro"; ?> شيكل</h3>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 stretch-card grid-margin">
                        <?php
                        $sql="Select * from don_for_story";
                        $result=$conn->query($sql);
                        $n=0;
                        $total_don_poor = 0;
                        if($result->num_rows>0)
                        {
                          while($row=$result->fetch_assoc())
                          {
                            $n++;
                            $status =$row["status_don"];
                          if($status == 1){
                            $don_value =$row["don_amount"];
                            $total_don_poor = $total_don_poor + $don_value;}
  }}
                      ?>
                        <div class="card bg-gradient-danger card-img-holder text-white">
                          <div class="card-body">
                            <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                            <h3 class="font-weight-normal mb-3">اجمالي تبرعات للفقراء<i class="mdi mdi-chart-line mdi-24px float-left"></i>
                            </h3>
                            <h3 class="mb-5"><?php echo "$total_don_poor"; ?> شيكل</h3>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 stretch-card grid-margin">
                        <?php
                        $sql="Select * from gifts";
                        $result=$conn->query($sql);
                        $n=0;
                        $total_don_gift = 0;
                        if($result->num_rows>0)
                        {
                          while($row=$result->fetch_assoc())
                          {
                            $n++;
                            $status =$row["status_don"];
                          if($status == 1){
                            $don_value =$row["don_amount"];
                            $total_don_gift = $total_don_gift + $don_value;}
  }}
                      ?>
                        <div class="card bg-gradient-info card-img-holder text-white">
                          <div class="card-body">
                            <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                            <h3 class="font-weight-normal mb-3">اجمالي تبرعات الاهداء<i class="mdi mdi-chart-line mdi-24px float-left"></i>
                            </h3>
                            <h3 class="mb-5"><?php echo "$total_don_gift"; ?>  شيكل</h3>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 stretch-card grid-margin">
                        <?php
                        $sql="Select * from donors";
                        $result=$conn->query($sql);
                        
                        $num_of_donor= 0;
                        if($result->num_rows>0)
                        {
                          while($row=$result->fetch_assoc())
                          {
                            $num_of_donor++;


  }}
                      ?>
                        <div class="card bg-gradient-success card-img-holder text-white">
                          <div class="card-body">
                            <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                            <h4 class="font-weight-normal mb-3">عدد الاشخاص المتبرعين بالدم<i class="mdi mdi-chart-line mdi-24px float-left"></i>
                            </h4>
                            <h3 class="mb-5"><?php echo "$num_of_donor"; ?> شخص</h3>
                          </div>
                        </div>
                      </div>
                        </div>
                        <div class="row">
                          <?php
                         $all_total_dons = $total_don_gift + $total_don_poor + $total_don_pro + $total_don_p + $total_don;
                           ?>
                            <div class="col-md-2"></div>
                            <div class="col-md-8 stretch-card grid-margin">
                              <div class="card bg-gradient-info card-img-holder text-white">
                                <div class="card-body">
                                  <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                                  <h2 class="font-weight-normal mb-3">اجمالي التبرعات الكلية<i class="mdi mdi-chart-line mdi-24px float-left"></i>
                                  </h2>
                                  <h2 class="mb-5"><?php echo "$all_total_dons"; ?>  شيكل</h2>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                  </form>
        </div>

  <script src="js/jquery.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="assets/vendors/chart.js/Chart.min.js"></script>
  <script src="assets/js/off-canvas.js"></script>
  <script src="assets/js/hoverable-collapse.js"></script>
  <script src="assets/js/misc.js"></script>
  <script src="assets/js/dashboard.js"></script>
  <script src="assets/js/todolist.js"></script>
	</body>
</html>
