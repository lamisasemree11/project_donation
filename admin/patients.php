<?php
include("header.php");
include("function.php");
?>
 <div class="row">
 <nav  style="margin-right:-200px;margin-top:100px;" class="col-md-4 d-none d-md-block  sidebar">
   <div class="sidebar-sticky">
     <ul class="nav flex-column">

       <li  class="nav-item">
         <a style="color:red;" class="nav-link" href="admin_view_patient.php">عرض المرضى</a>
       </li>
       <li class="nav-item">
         <a style="color:blue;" class="nav-link" href="admin_add_patient.php">اضافة مريض</a>
       </li>
       
     </ul>
     <hr>
   </div>
 </nav>
 <div style="padding-top:40px;padding-right:40px;" class="col-9">
   <h3 style="text-align:right;color:blue;" ><i class="fa fa-search"></i>عرض بيانات المرضى</h3><hr>
<div class="row">
<div class="col-md-6 col-md-offset-3">

 <form role="form">
   <div class="form-group text-primary">
     <div class="form-group row">
     <label class="col-sm-3 col-form-label"  style="font-size:17px;font-weight:bold;" >بحث </label>
         <div class="col-sm-9">
           <input type="text" id="q" class="form-control"><br>
               </div>
             </div>
   </div>
 </form>
</div>
<div class='col-md-12'>
 <div class='table-responsive' id="feedback">

                         <?php
                           $sql="Select * from patients";
                           load_patient($sql,$conn);
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
      $.post('ser_patient.php',{q:txt},function(data){
        $("#feedback").html(data);
      });

  });

});
</script>
