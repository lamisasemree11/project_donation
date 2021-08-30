<?php
include("header.php");
include("function.php");
?>
<div class="row">

          <div style="padding-top:20px;padding-right:200px;" class="col-12">
            <p style='padding-left:800px;color:blue;font-size:20px;font-weight:bold;'>كنوز الخير الفلسطيني للتبرعات >> تعليقات المستخدمين </p><hr>
                <form  class="form-sample">
                  <div class="row">
                      <div class="form-group text-primary">
                        <div class='table-responsive' id="feedback">
                          <?php
                          $sql="Select * from comment";
                          load_comment($sql,$conn);
                        ?>
                    </div>
                      </div>
                  </div>
                </form>

              </div>
</div>

<?php include("footer.php"); ?>
