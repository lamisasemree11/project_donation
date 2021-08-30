<?php
include("header.php");
 ?>

 <section class="ftco-section"style="text-align:right;">
   <div class="container">
        <div style="margin-top:-50px;" class="row">
            <div class="col-lg-12 col-xs-12">
                <ol class="breadcrumb">
                  <li style="margin-left:40px;"><a href=<?php echo 'profile.php?id='.$row["id"];?>>البيانات الاساسية</a></li>
                  <li style="margin-left:40px;"><a style="color:red;" href="">التبرعات التي قمت بها</a></li>
                  <li><a style="margin-left:40px;" href=<?php echo 'user_msgs.php?id='.$row["id"];?>>الرسائل المرسلة</a></li>
                  <li style="margin-left:40px;"><a href=<?php echo 'my_user_story.php?id='.$row["id"];?>>قصصي المضافة</a></li>
                  <li style="margin-left:40px;"><a href=<?php echo 'Request_blood.php?id='.$row["id"];?>>مشاريع مضافة</a></li>
                  <li><a  href=<?php echo 'update_profile.php?id='.$row["id"];?>>تغيير كلمة المرور</a></li>
                </ol>
            </div>
        </div>
        <div style="margin-bottom:50px;" class="row">
        <nav   class="col-lg-4 ftco-animate">
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
         <a style="color:red;" class="nav-link" href=<?php echo 'user_gift_don.php?id='.$row["id"];?>>اهداء تبرع</a>
       </li>

       <li class="nav-item">
         <a style="color:blue;" class="nav-link " href=<?php echo 'user_patient_don.php?id='.$row["id"];?>> كفالة المرضى</a>
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
 					<div style="margin-top:50px;" class="col-lg-8 ftco-animate" >
            <form  class="form-sample">
             <div class="row">
                 <div class="form-group text-primary">
                   <div class='table-responsive' id="feedback">
                   <?php
                     $sql="Select * from gifts where id_user=".$_GET["id"];
                     $result=$conn->query($sql);
                     $n=0;
                     if($result->num_rows>0)
                     {

    echo '
    <table class="table table-striped">
    <tr style="background-color:white;">
    <th>#</th>
    <th>المهدى اليه</th>
    <th>مبلغ التبرع</th>
    <th>جوال المهدى اليه</th>
    <th>نموذج الاهداء</th>
    <th>تاريخ التبرع</th>
    <th>حالة التبرع</th>

    </tr>';

         while($row=$result->fetch_assoc())
         {
           $n++;
           echo "<tr>";
           echo "<td>".$n."</td>";
           echo "<td>".$row['to_name']."</td>";
           echo "<td>".$row['don_amount']." شيكل </td>";
           echo "<td>".$row['phone']."</td>";
           echo "<td>".$row['relation']."</td>";
           echo "<td>".$row['date_don']."</td>";


           $status_don  =$row["status_don"];
                       if($status_don==1)
                       {
                         echo '<td><a href="" class="btn btn-sm btn-primary">تم الاستلام</a></td>';


                       }
                       else
                       {
                           echo'<td><a href="#" class="btn btn-sm btn-danger">لم يتم الاستلام</a></td>';
                       }




           echo "</tr>";
         }
         echo'</table>';
       }
       else{
         echo "<div style='font-size:18px;font-weight:bold;' class='alert alert-danger'>لا يوجد تبرعات قم بالتبرع من فضلك</div>";
       }


                   ?>
               </div>
                 </div>

             </div>
 </form>
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
