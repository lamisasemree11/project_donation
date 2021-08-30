<?php
include("header.php");
include("function.php");
?>
 <div class="row">
 <nav  style="margin-right:-200px;margin-top:50px;" class="col-md-4 d-none d-md-block  sidebar">
   <div class="sidebar-sticky">
     <ul class="nav flex-column">

       <li  class="nav-item">
         <a style="color:blue;" class="nav-link" href="donations.php">التبرعات العامة</a>
       </li>
       <li class="nav-item">
         <a style="color:blue;" class="nav-link" href="gifts_don.php">اهداء التبرع</a>
       </li>
       <li class="nav-item">
         <a style="color:red;"  class="nav-link " href="patient_don.php">التبرعات للمرضى</a>
       </li>
       <li class="nav-item">
         <a style="color:blue;" class="nav-link " href="project_dons.php">التبرعات للمشاريع</a>
       </li>
       <li class="nav-item">
         <a style="color:blue;" class="nav-link " href="story_dons.php">التبرعات للفقراء</a>
       </li>
     </ul>
     <hr>
   </div>
 </nav>
 <div style="padding-top:40px;padding-right:40px;" class="col-9">

<div class="row">
<div class="col-md-6 col-md-offset-3">

</div>
<div class='col-md-12'>
 <div class='table-responsive' id="feedback">
   <?php
   $sql="Select * from  don_for_patients";
   load_don_for_patients($sql,$conn);
 ?>


 <div>
</div>


</div>


</div>
</div>
   </div>
     </div>
<?php include("footer.php"); ?>
