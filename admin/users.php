<?php
include("header.php");
include("function.php");
?>
<div class="row">
          <div class="col-3">

          </div>
          <div style="padding-top:20px;" class="col-7">
            <p style='padding-left:450px;color:blue;font-size:20px;font-weight:bold;'>كنوز الخير الفلسطيني للتبرعات >> المستخدمين</p><hr>

                <form  class="form-sample">
                  <div class="row">

                      <div class="form-group text-primary">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label"  style="font-size:14px;font-weight:bold;" >بحث </label>
                            <div class="col-sm-9">
                              <input type="text" id="q" class="form-control"><br>
                                  </div>
                                </div>
                        <div class='table-responsive' id="feedback">
                          <?php
                          $sql="Select * from users";
                          load_users($sql,$conn);
                        ?>
                    </div>
                      </div>
                  </div>
                </form>

              </div>


<?php include("footer.php"); ?>
<script>
$(document).ready(function()
{
$("#q").keyup(function(){
var txt=$("#q").val();
$.post('ser_users.php',{q:txt},function(data){
$("#feedback").html(data);
});

});

});
</script>
