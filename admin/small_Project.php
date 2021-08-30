
<?php
include("header.php");
include("function.php");
?>
<div class="row">

          <div style="padding-top:20px;padding-right:200px;" class="col-12">
            <p style='padding-left:800px;color:blue;font-size:20px;font-weight:bold;'>كنوز الخير الفلسطيني للتبرعات >> ادارة المشاريع</p><hr>
                <form  class="form-sample">
                  <div class="row">
                      <div class="form-group text-primary">
                        <div class='table-responsive' id="feedback">
                          <?php
                          $sql="Select * from smallproject";
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
             <th>حذف</th>
             </tr>';

              while($row=$result->fetch_assoc())
              {
                $n++;
                echo "<tr>";
                echo "<td>".$n."</td>";
                echo "<td>".$row['project_title']."</td>";
                echo "<td>".substr($row['project_Desc'],0,100)."...</td>";
                echo "<td>".$row['date_project']."</td>";
                if($row["Total_amount"]==$row["Amount_paid"])
                {
                  echo'<td><a href="" class="btn btn-sm btn-success">مكتمل </a></td>';
                  echo'<td><a href="" class="btn btn-sm btn-primary">انتهى النشر</a></td>';
                }
                else
                {
                    echo'<td><a href="" class="btn btn-sm btn-danger">غير مكتمل</a></td>';
                            if($row["project_status"]==1)
                            {
                              echo '<td><a href="deactive_project.php?idProject='.$row['project_id'].'" class="btn btn-sm btn-success">تم النشر</a></td>';

                            }
                            else
                            {
                              echo '<td><a href="active_project.php?idProject='.$row['project_id'].'" class="btn btn-sm btn-primary">لم يتم النشر</a></td>';
                            }}
                                echo "<td><a  href='view_project.php?idProject=".$row['project_id']."'  class='btn btn-sm btn-primary'>عرض</a></td>";

                                echo "<td><a href='delete_project.php?idProject=".$row['project_id']."'  class='btn btn-sm btn-danger'>حذف </a></td>";

                echo "</tr>";
              }
              echo'</table>';
             }
             else{
              echo "<div style='font-size:18px;font-weight:bold;' class='alert alert-danger'>لا يوجد اي مشاريع للتبرع</div>";
             }


                        ?>
                    </div>
                      </div>
                  </div>
                </form>

              </div>
</div>

<?php include("footer.php"); ?>
