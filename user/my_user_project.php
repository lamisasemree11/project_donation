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
         <a style="color:blue;" class="nav-link " href=<?php echo 'update_profile.php?id='.$row["id"];?>> تغيير كلمة المرور</a>
       </li>

     </ul>
     <hr>


   </div>
 </nav>
 <div style="margin-top:50px;" class="col-lg-9 ftco-animate" >
    <form  class="form-sample">
     <div class="row">
         <div class="form-group text-primary">
           <div class='table-responsive' id="feedback">
           <?php
             $sql="Select * from smallproject where id_user=".$_GET["id"];
             $result=$conn->query($sql);
             $n=0;
             if($result->num_rows>0)
             {

echo '
<table class="table table-striped">
<tr style="background-color:white;">
<th>#</th>
<th>عنوان المشروع</th>
<th>وصف المشروع</th>
<th>تاريخ الارسال</th>
<th>حالة التبرع</th>
<th>الحالة</th>
<th>عرض التفاصيل</th>
<th>تعديل</th>
<th>حذف</th>

</tr>';

 while($row=$result->fetch_assoc())
 {
   $n++;
   echo "<tr>";
   echo "<td>".$n."</td>";
   echo "<td>".$row['project_title']."</td>";
   echo "<td>".substr($row['project_Desc'],0,70)."...</td>";
   echo "<td>".$row['date_project']."</td>";
   $project_status   =$row["project_status"];
   if($row["Total_amount"]==$row["Amount_paid"])
   {
     echo'<td><a href="" class="btn btn-sm btn-success">مكتمل </a></td>';
     echo'<td><a href="" class="btn btn-sm btn-primary">انتهى النشر</a></td>';
     echo "<td><a target='_blank' href='smallProject_page.php?id=".$_GET['id']."&id_project=".$row['project_id']."'  class='btn btn-sm btn-success'>عرض</a></td>";
     echo "<td><a href=''  class='btn btn-sm btn-primary'>لا يمكنك </a></td>";
     echo "<td><a href=''  class='btn btn-sm btn-primary'>لا يمكنك </a></td>";

   }


   else
   {
       echo'<td><a href="" class="btn btn-sm btn-danger">غير مكتمل</a></td>';
               if($project_status ==1)
               {
                 echo '<td><a href="" class="btn btn-sm btn-primary">تم نشره</a></td>';
                 echo "<td><a target='_blank' href='smallProject_page.php?id=".$_GET['id']."&id_project=".$row['project_id']."'  class='btn btn-sm btn-success'>عرض</a></td>";
                 echo "<td><a href=''  class='btn btn-sm btn-primary'>لا يمكنك </a></td>";
                 echo "<td><a href=''  class='btn btn-sm btn-primary'>لا يمكنك </a></td>";


               }
               else
               {
                   echo'<td><a href="#" class="btn btn-sm btn-danger">لم يتم نشره</a></td>';
                   echo "<td><a  href='view_smallProject_user.php?id=".$_GET['id']."&id_project=".$row['project_id']."'  class='btn btn-sm btn-success'>عرض</a></td>";
                   echo "<td><a href='update_smallProject_user.php?id=".$_GET['id']."&id_project=".$row['project_id']."'  class='btn btn-sm btn-success'>تعديل </a></td>";
                   echo "<td><a href='delete_smallProject_user.php?id=".$_GET['id']."&id_project=".$row['project_id']."'  class='btn btn-sm btn-danger'>حذف </a></td>";
               }

}

   echo "</tr>";
 }
 echo'</table>';
}
else{
 echo "<div style='font-size:18px;font-weight:bold;' class='alert alert-danger'>لا يوجد لديك اي مشاريع</div>";
}


           ?>
       </div>
         </div>

     </div>
</form>
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
