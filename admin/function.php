<?php
function load_users($sql,$conn)
{
  echo '
        <table class="table table-striped">
        <tr style="background-color:white;">
        <th>#</th>
        <th>اسم المستخدم</th>
        <th>البريد الالكتروني</th>
        <th>رقم التواصل</th>
        <th>الرصيد الاولي</th>
        <th>اجمالي التبرعات</th>
        <th>الرصيد المتبقي</th>
        </tr>';
              $result=$conn->query($sql);
              $n=0;
              if($result->num_rows>0)
              {
                while($row=$result->fetch_assoc())
                {
                  $n++;
                  echo "<tr>";
                  echo "<td>".$n."</td>";
                  echo "<td style='text-align:right;'>".$row['name']."</td>";
                  echo "<td style='text-align:right;'>".$row['email']."</td>";
                  echo "<td style='text-align:right;'>".$row['phonenumber']."</td>";
                  echo "<td style='text-align:right;'>".$row['first_balance']." شيكل </td>";
                  echo "<td style='text-align:right;'>".$row['Total_donations']." شيكل </td>";
                  echo "<td style='text-align:right;'>".$row['Initial_balance']." شيكل </td>";
                  echo "</tr>";
                }
              }
      echo'</table>';

}

function load_msg($sql,$conn)
{
  echo '
        <table class="table table-striped">
        <tr style="background-color:white;">
        <th>#</th>
        <th>اسم المستخدم</th>
        <th>البريد الالكتروني للمستخدم</th>
        <th>نوع الرسالة</th>
        <th>عنوان الرسالة</th>
        <th>نص الرسالة</th>
        <th>تاريخ الارسال</th>
        <th>الحذف</th>
        </tr>';
              $result=$conn->query($sql);
              $n=0;
              if($result->num_rows>0)
              {
                while($row=$result->fetch_assoc())
                {
                  $id_user  =$row["id_user"];
                  $sql2="Select * from users where id=".$id_user;
                  $result2=$conn->query($sql2);
                  if($result2->num_rows>0){
                  $row2=$result2->fetch_assoc();}
                  $n++;
                  echo "<tr>";
                  echo "<td>".$n."</td>";
                  echo "<td style='text-align:right;'>".$row2['name']."</td>";
                  echo "<td style='text-align:right;'>".$row2['email']."</td>";
                  echo "<td style='text-align:right;'>".$row['type']."</td>";
                  echo "<td style='text-align:right;'>".$row['title']."</td>";
                  echo "<td style='text-align:right;'>".$row['desc_msg']."</td>";
                  echo "<td style='text-align:right;'>".$row['time_msg']."</td>";
                    echo "<td><a href='delete_msg.php?idmag=".$row['id']."' class='btn btn-sm btn-danger'>حذف</a></td>";
                  echo "</tr>";
                }
              }
      echo'</table>';

}
function load_comment($sql,$conn)
{
  echo '
        <table class="table table-striped">
        <tr style="background-color:white;">
        <th>#</th>
        <th style="text-align:right;">اسم المستخدم</th>
        <th style="text-align:right;">البريد الالكتروني للمستخدم</th>
        <th style="text-align:right;">التعليق</th>
        <th style="text-align:right;">تاريخ التعليق</th>
        <th style="text-align:right;">الحذف</th>
        </tr>';
              $result=$conn->query($sql);
              $n=0;
              if($result->num_rows>0)
              {
                while($row=$result->fetch_assoc())
                {
                  $id_user  =$row["id_user"];
                  $sql2="Select * from users where id=".$id_user;
                  $result2=$conn->query($sql2);
                  if($result2->num_rows>0){
                  $row2=$result2->fetch_assoc();}
                  $n++;
                  echo "<tr>";
                  echo "<td>".$n."</td>";
                  echo "<td style='text-align:right;'>".$row2['name']."</td>";
                  echo "<td style='text-align:right;'>".$row2['email']."</td>";
                  echo "<td style='text-align:right;'>".$row['comment']."</td>";
                  echo "<td style='text-align:right;'>".$row['comment_date']."</td>";
                    echo "<td><a href='delete_comment.php?idComment=".$row['comment_id']."' class='btn btn-sm btn-danger'>حذف</a></td>";
                  echo "</tr>";
                }
              }
      echo'</table>';

}
function load_donor($sql,$conn)
{
	echo '
				<table class="table table-striped">
				<tr>
			  <th>الرقم</th>
				<th>الاسم</th>
				<th>الجنس</th>
				<th>فصيلة الدم</th>
				<th>المدينة</th>
				<th>اقرب مستشفى اليه</th>
				<th>رقم التواصل</th>
				<th>البريد الالكتروني</th>
				<th>الحالة</th>
				<th>حذف</th>
				</tr>';
							$result=$conn->query($sql);
							$n=0;
							if($result->num_rows>0)
							{
								while($row=$result->fetch_assoc())
								{
									$n++;
									echo "<tr>";
									echo "<td>".$n."</td>";
									echo "<td>".$row['donor_name']."</td>";
									echo "<td>".$row['donor_gender']."</td>";
									echo "<td>".$row['donor_blood_group']."</td>";
									echo "<td>".$row['donor_city']."</td>";
									echo "<td>".$row['donor_hospital']."</td>";
									echo "<td>".$row['donor_contactNo']."</td>";
									echo "<td>".$row['donor_email']."</td>";
                  $status=$row["status"];
                  if($status==0)
                  {
                    echo'<td><a href="admin_activate.php?id='.$row["donor_id"].'" class="btn btn-sm btn-primary">متاح الان</a></td>';
                  }
                  else
                  {
                      echo'<td><a href="admin_deactivate.php?id='.$row["donor_id"].'" class="btn btn-sm btn-success">غير متاح الان</a></td>';
                  }

									echo "<td><a href='admin_delete_donor.php?id=".$row['donor_id']."' class='btn btn-sm btn-danger '> حذف</a></td>";
									echo "</tr>";
								}
							}
			echo'</table>';

}
function  load_people_need($sql,$conn)
{
	echo '
	<table class="table table-striped">
	<tr>
	<th>الرقم</th>
	<th>الاسم</th>
	<th>الجنس</th>
	<th>فصيلة الدم</th>
	<th>المدينة</th>
	<th>رقم التواصل</th>
	<th>البريد الالكتروني</th>
	<th>الحالة</th>
	<th>الحذف</th>
	</tr>';


							$result=$conn->query($sql);
							$n=0;
							if($result->num_rows>0)
							{
								while($row=$result->fetch_assoc())
								{
									$n++;
									echo "<tr>";
									echo "<td>".$n."</td>";
									echo "<td>".$row['name']."</td>";
									echo "<td>".$row['gender']."</td>";
									echo "<td>".$row['blood_group']."</td>";
									echo "<td>".$row['city']."</td>";
									echo "<td>".$row['contactNum']."</td>";
									echo "<td>".$row['email']."</td>";


									if($row["status"]==1)
									{

									echo "<td><a href='admin_activate_blood_req.php?id={$row['id']}' class='btn btn-sm btn-primary '> مكتمل</a></td>";

									}
									else
									{

									echo "<td><a href='admin_deactivate_req_blood.php?id={$row['id']}' class='btn btn-sm btn-success '> غير مكتمل</a></td>";

									}


									echo "<td><a href='delete_blood_req.php?id={$row['id']}' class='btn btn-sm btn-danger '> حذف </a></td>";


									echo "</tr>";

								}
							}
							else
							{
								echo "<div >لا يوجد طلبات وحدات دم</div>";
							}


			echo'</table>';

}
function load_patient($sql,$conn)
{
	echo '
				<table style="text-align:right;" class="table table-striped">
				<tr>
				<th>الرقم</th>
				<th>الاسم</th>
				<th>رقم الهوية</th>
				<th>نوع المرض</th>
				<th>المبلغ الاجمالي</th>
				<th>اخر موعد للتبرع</th>
        <th>حالة التبرع</th>
				<th>الحالة</th>
				<th>تعديل</th>
				<th>حذف</th>
				</tr>';
							$result=$conn->query($sql);
							$n=0;
							if($result->num_rows>0)
							{
								while($row=$result->fetch_assoc())
								{
									$n++;
									echo "<tr>";
									echo "<td>".$n."</td>";
									echo "<td>".$row['fullName']."</td>";
									echo "<td>".$row['patientID']."</td>";
									echo "<td>".$row['typeDisease']."</td>";
									echo "<td>".$row['TotalِAmount']."</td>";
									echo "<td>".$row['last_date_donate']."</td>";

                  if($row["TotalِAmount"]==$row["TheAmountPaid"])
                  {
                    echo'<td><a href="" class="btn btn-sm btn-success">مكتمل </a></td>';
                      echo'<td><a href="" class="btn btn-sm btn-primary">غير متاح بالموقع</a></td>';
                  }
                  else
                  {
                      echo'<td><a href="" class="btn btn-sm btn-danger">غير مكتمل</a></td>';
                      if($row["status"]==1)
                      {
                        echo'<td><a href="admin_activeLocation_patient.php?id='.$row["id"].'" class="btn btn-sm btn-success">متاح في الموقع</a></td>';
                      }
                      else
                      {
                          echo'<td><a href="admin_deactive_patient.php?id='.$row["id"].'" class="btn btn-sm btn-primary">غير متاح في الموقع</a></td>';
                      }
                  }

									echo "<td><a href='admin_patientUpdate.php?id=".$row['id']."' class='btn btn-sm btn-primary'> تعديل</a></td>";
									echo "<td><a href='admin_delete_patient.php?id=".$row['id']."' class='btn btn-sm btn-danger'> حذف</a></td>";
									echo "</tr>";
								}
							}
			echo'</table>';

}
function load_general_don($sql,$conn)
{
  echo '
        <table style="text-align:right;" class="table table-striped">
        <tr style="background-color:white;">
        <th>#</th>
        <th>اسم المتبرع</th>
        <th>البريد الالكتروني للمتبرع</th>
        <th>نوع التبرع</th>
        <th>مبلغ التبرع</th>
        <th>تاريخ التبرع</th>
        <th>حالة التبرع</th>
        </tr>';
              $result=$conn->query($sql);
              $n=0;
              if($result->num_rows>0)
              {
                while($row=$result->fetch_assoc())
                {
                  $id_user  =$row["id_user"];
                  $sql2="Select * from users where id=".$id_user;
                  $result2=$conn->query($sql2);
                  if($result2->num_rows>0){
                  $row2=$result2->fetch_assoc();}
                  $n++;
                  echo "<tr>";
                  echo "<td>".$n."</td>";
                  echo "<td style='text-align:right;'>".$row2['name']."</td>";
                  echo "<td style='text-align:right;'>".$row2['email']."</td>";
                  echo "<td style='text-align:right;'>".$row['don_type']."</td>";
                  echo "<td style='text-align:right;'>".$row['don_value']." شيكل </td>";
                  echo "<td style='text-align:right;'>".$row['date_don']."</td>";
                  if($row["status_don"]==1)
                  {
                    echo'<td><a href="" class="btn btn-sm btn-success">تم استلام المبلغ</a></td>';
                  }
                  else
                  {
                      echo'<td><a href="active_general_don.php?idgeneral_don='.$row["id_general_don"].'" class="btn btn-sm btn-danger">لم يتم استلام المبلغ</a></td>';
                  }
                  echo "</tr>";
                }
              }
      echo'</table>';

}
function load_gifts_don($sql,$conn)
{
  echo '
        <table style="text-align:right;" class="table table-striped">
        <tr style="background-color:white;">
        <th>#</th>
        <th>اسم المتبرع</th>
        <th>البريد الالكتروني للمتبرع</th>
        <th>المهدى اليه</th>
        <th>مبلغ الاهداء</th>
        <th>جوال المهدى اليه</th>
        <th>نموذج الاهداء</th>
        <th>تاريخ الاهداء</th>
        <th>حالة الاهداء</th>
        </tr>';
              $result=$conn->query($sql);
              $n=0;
              if($result->num_rows>0)
              {
                while($row=$result->fetch_assoc())
                {
                  $id_user  =$row["id_user"];
                  $sql2="Select * from users where id=".$id_user;
                  $result2=$conn->query($sql2);
                  if($result2->num_rows>0){
                  $row2=$result2->fetch_assoc();}
                  $n++;
                  echo "<tr>";
                  echo "<td>".$n."</td>";
                  echo "<td style='text-align:right;'>".$row2['name']."</td>";
                  echo "<td style='text-align:right;'>".$row2['email']."</td>";
                  echo "<td style='text-align:right;'>".$row['to_name']."</td>";
                  echo "<td style='text-align:right;'>".$row['don_amount']." شيكل </td>";
                  echo "<td style='text-align:right;'>".$row['phone']."</td>";
                  echo "<td style='text-align:right;'>".$row['relation']."</td>";
                  echo "<td style='text-align:right;'>".$row['date_don']."</td>";
                  if($row["status_don"]==1)
                  {
                    echo'<td><a href="" class="btn btn-sm btn-success">تم استلام المبلغ</a></td>';
                  }
                  else
                  {
                      echo'<td><a href="active_gifts_don.php?id_gift='.$row["id_gift"].'" class="btn btn-sm btn-danger">لم يتم استلام المبلغ</a></td>';
                  }

                  echo "</tr>";
                }
              }
      echo'</table>';

}
function load_don_for_patients($sql,$conn)
{
  echo '
        <table style="text-align:right;" class="table table-striped">
        <tr style="background-color:white;">
        <th>#</th>
        <th>اسم المتبرع</th>
        <th>البريد الالكتروني للمتبرع</th>
        <th>اسم المريض</th>
        <th>هوية المريض</th>
        <th>مبلغ التبرع</th>
        <th>تاريخ التبرع</th>
        <th>حالة التبرع</th>
        </tr>';
              $result=$conn->query($sql);
              $n=0;
              if($result->num_rows>0)
              {
                while($row=$result->fetch_assoc())
                {
                  $id_user  =$row["id_user"];
                  $id_patient  =$row["id_patient"];
                  $sql2="Select * from users where id=".$id_user;
                  $result2=$conn->query($sql2);
                  if($result2->num_rows>0){
                  $row2=$result2->fetch_assoc();}

                  $sql3="Select * from patients where id=".$id_patient;
                  $result3=$conn->query($sql3);
                  if($result3->num_rows>0){
                  $row3=$result3->fetch_assoc();}
                  $n++;
                  echo "<tr>";
                  echo "<td>".$n."</td>";
                  echo "<td style='text-align:right;'>".$row2['name']."</td>";
                  echo "<td style='text-align:right;'>".$row2['email']."</td>";
                  echo "<td style='text-align:right;'>".$row3['fullName']."</td>";
                  echo "<td style='text-align:right;'>".$row3['patientID']."</td>";
                  echo "<td style='text-align:right;'>".$row['don_value']." شيكل </td>";
                  echo "<td style='text-align:right;'>".$row['date_don']."</td>";
                  if($row["status_don"]==1)
                  {
                    echo'<td><a href="" class="btn btn-sm btn-success">تم استلام المبلغ</a></td>';
                  }
                  else
                  {
                      echo'<td><a href="active_don_for_patient.php?id_don_for_patient='.$row["id_don_for_patient"].'" class="btn btn-sm btn-danger">لم يتم استلام المبلغ</a></td>';
                  }

                  echo "</tr>";
                }
              }
      echo'</table>';

}
function load_don_for_project($sql,$conn)
{
  echo '
        <table style="text-align:right;" class="table table-striped">
        <tr style="background-color:white;">
        <th>#</th>
        <th>اسم المتبرع</th>
        <th>البريد الالكتروني للمتبرع</th>
        <th>اسم المشروع</th>
        <th>مالك المشروع</th>
        <th>مبلغ التبرع</th>
        <th>تاريخ التبرع</th>
        <th>حالة التبرع</th>
        </tr>';
              $result=$conn->query($sql);
              $n=0;
              if($result->num_rows>0)
              {
                while($row=$result->fetch_assoc())
                {
                  $id_user  =$row["id_user"];
                  $id_project  =$row["id_project"];
                  $sql2="Select * from users where id=".$id_user;
                  $result2=$conn->query($sql2);
                  if($result2->num_rows>0){
                  $row2=$result2->fetch_assoc();}

                  $sql3="Select * from smallproject where project_id=".$id_project;
                  $result3=$conn->query($sql3);
                  if($result3->num_rows>0){
                  $row3=$result3->fetch_assoc();}
                  $n++;
                  echo "<tr>";
                  echo "<td>".$n."</td>";
                  echo "<td style='text-align:right;'>".$row2['name']."</td>";
                  echo "<td style='text-align:right;'>".$row2['email']."</td>";
                  echo "<td style='text-align:right;'>".$row3['project_title']."</td>";
                  echo "<td style='text-align:right;'>".$row3['project_owner']."</td>";
                  echo "<td style='text-align:right;'>".$row['don_amount']." شيكل </td>";
                  echo "<td style='text-align:right;'>".$row['date_don']."</td>";
                  if($row["status_don"]==1)
                  {
                    echo'<td><a href="" class="btn btn-sm btn-success">تم استلام المبلغ</a></td>';
                  }
                  else
                  {
                      echo'<td><a href="active_don_for_project.php?id_don_project='.$row["id_don_project"].'" class="btn btn-sm btn-danger">لم يتم استلام المبلغ</a></td>';
                  }

                  echo "</tr>";
                }
              }
      echo'</table>';

}

function load_don_for_story($sql,$conn)
{
  echo '
        <table style="text-align:right;" class="table table-striped">
        <tr style="background-color:white;">
        <th>#</th>
        <th>اسم المتبرع</th>
        <th>البريد الالكتروني للمتبرع</th>
        <th>عنوان القصة</th>
        <th>مالك القصة</th>
        <th>مبلغ التبرع</th>
        <th>تاريخ التبرع</th>
        <th>حالة التبرع</th>
        </tr>';
              $result=$conn->query($sql);
              $n=0;
              if($result->num_rows>0)
              {
                while($row=$result->fetch_assoc())
                {
                  $id_user  =$row["id_user"];
                  $id_story  =$row["id_story"];
                  $sql2="Select * from users where id=".$id_user;
                  $result2=$conn->query($sql2);
                  if($result2->num_rows>0){
                  $row2=$result2->fetch_assoc();}

                  $sql3="Select * from mystory where id=".$id_story;
                  $result3=$conn->query($sql3);
                  if($result3->num_rows>0){
                  $row3=$result3->fetch_assoc();}
                  $n++;
                  echo "<tr>";
                  echo "<td>".$n."</td>";
                  echo "<td style='text-align:right;'>".$row2['name']."</td>";
                  echo "<td style='text-align:right;'>".$row2['email']."</td>";
                  echo "<td style='text-align:right;'>".$row3['title']."</td>";
                  echo "<td style='text-align:right;'>".$row3['name']."</td>";
                  echo "<td style='text-align:right;'>".$row['don_amount']." شيكل </td>";
                  echo "<td style='text-align:right;'>".$row['date_don']."</td>";
                  if($row["status_don"]==1)
                  {
                    echo'<td><a href="" class="btn btn-sm btn-success">تم استلام المبلغ</a></td>';
                  }
                  else
                  {
                      echo'<td><a href="active_don_for_story.php?id_don_story='.$row["id_don_story"].'" class="btn btn-sm btn-danger">لم يتم استلام المبلغ</a></td>';
                  }

                  echo "</tr>";
                }
              }
      echo'</table>';

}
 ?>
