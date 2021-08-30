<?php
include("header.php");
include("function.php");
?>
 <div class="row">
 <nav  style="margin-right:-200px;margin-top:100px;" class="col-md-4 d-none d-md-block  sidebar">
   <div class="sidebar-sticky">
     <ul class="nav flex-column">

       <li  class="nav-item">
         <a style="color:blue;" class="nav-link" href="blood_don.php">عرض المتبرعين</a>
       </li>
       <li class="nav-item">
         <a style="color:blue;" class="nav-link" href="admin_active_donor.php">متبرع متاح الان</a>
       </li>
       <li class="nav-item">
         <a style="color:red;"  class="nav-link " href="admin_notactive_donor.php"  >متبرع غير متاح الان</a>
       </li>
       <li class="nav-item">
         <a style="color:blue;" class="nav-link " href="admin_need_blood.php"> محتاج دم</a>
       </li>
     </ul>
     <hr>
   </div>
 </nav>
 <div style="padding-top:40px;padding-right:40px;" class="col-9">
   <h3 style="text-align:right;color:blue;" ><i class="fa fa-search"></i> تفاصيل المتبرع المتاح الان </h3><hr>
<div class="row">
<div class="col-md-6 col-md-offset-3">

 <form role="form">
   <div class="form-group text-primary">

   </div>
 </form>
</div>
<div class='col-md-12'>
 <div class='table-responsive' id="feedback">

 <?php
   $sql="Select * from donors WHERE status=1";
   load_donor($sql,$conn);
 ?>

 <div>
</div>


</div>


</div>
</div>
   </div>
     </div>
<?php include("footer.php"); ?>

<script>
$(document).ready(function()
{
  $("#q").keyup(function(){
      var txt=$("#q").val();
      $.post('ser_donor.php',{q:txt},function(data){
        $("#feedback").html(data);
      });

  });

});
</script>
