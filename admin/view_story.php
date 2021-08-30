
<?php
include("header.php");
include("function.php");
?>
<div class="row">

          <div style="padding-top:20px;padding-right:200px;" class="col-12">
                <form  class="form-sample">
                  <div class="row">
                      <div class="form-group text-primary">
                        <div class='table-responsive' id="feedback">
                          <?php
                            $sql="Select * from mystory where id=".$_GET["idStory"];
                            $result=$conn->query($sql);
                            if($result->num_rows>0)
                            {
                              $row=$result->fetch_assoc();
                            }
                            ?>
                                 <p style='text-align:right;color:black;font-size:22px;font-weight:bold;'><?php echo $row["title"] ; ?></p><hr>

                                 <?php
                                  echo "<img style='margin-left:200px;'  width='400px;' src=../user/images/".$row["image"].'>';
                                  ?>
                                  <br>
                                  <p style='color:black;font-size:20px;margin-top:30px;text-align:right;'><?php echo $row["story"] ; ?></p>
                                  <p style='color:black;font-size:20px;margin-top:30px;text-align:right;'>مالك القصة / <?php echo $row["name"] ; ?> </p>

                                  <p style='color:black;font-size:20px;margin-top:30px;text-align:right;'>العنوان / <?php echo $row["address"] ; ?></p>

                                  <p style='color:black;font-size:20px;margin-top:30px;text-align:right;'>رقم التواصل / <?php echo $row["phone"] ; ?></p>

                                  <p style='color:black;font-size:20px;margin-top:30px;text-align:right;'>البريد الالكتروني للتواصل / <?php echo $row["email"] ; ?></p>

                                  <p style='color:black;font-size:20px;margin-top:30px;text-align:right;'>المبلغ الاجمالي للمشروع / <?php echo $row["money"] ; ?> شيكل </p>

                                    <p style='color:black;font-size:20px;margin-top:30px;text-align:right;'>اجمالي التبرعات للمشروع / <?php echo $row["TheAmountPaid"] ; ?> شيكل </p>

                                  <p style='color:black;font-size:20px;margin-top:30px;text-align:right;'>اخر موعد للتبرع / <?php echo $row["Last_donate_date"] ; ?></p>

                           <br>




                    </div>
                      </div>
                  </div>
                </form>

              </div>
</div>

<?php include("footer.php"); ?>
