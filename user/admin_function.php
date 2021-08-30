<?php
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
				<th>عرض</th>
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

									echo "<td><a href='admin_view_donor.php?id=".$row['donor_id']."' class='btn btn-success btn-xs'><i class='fa fa-edit'></i> عرض</a></td>";
									echo "<td><a href='admin_delete_donor.php?id=".$row['donor_id']."' class='btn btn-danger btn-xs'><i class='fa fa-trash'></i> حذف</a></td>";
									echo "</tr>";
								}
							}
			echo'</table>';

}
function load_people_need($sql,$conn)
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
	<th>عرض</th>
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
									echo "<td>".$row['name']."</td>";
									echo "<td>".$row['gender']."</td>";
									echo "<td>".$row['blood_group']."</td>";
									echo "<td>".$row['city']."</td>";
									echo "<td>".$row['contactNum']."</td>";
									echo "<td>".$row['email']."</td>";

									if($row["status"]==0)
									{

									echo "<td><a href='#' class='btn btn-danger btn-xs'><i class='fa fa-bed'></i> قيد الانتظار</a></td>";

									}
									else if($row["status"]==2)
									{

									echo "<td><a href='#' class='btn btn-success btn-xs'><i class='fa fa-bed'></i> مكتمل</a></td>";

									}
									else if($row["status"]==1)
									{

									echo "<td><a href='#' class='btn btn-warning btn-xs'><i class='fa fa-bed'></i> غير مكتمل</a></td>";

									}


									echo "<td><a href='admin_view_request.php?id={$row['id']}' class='btn btn-primary btn-xs'><i class='fa fa-edit'></i> عرض</a></td>";


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
				<table class="table table-striped">
				<tr>
				<th>الرقم</th>
				<th>الاسم</th>
				<th>رقم الهوية</th>
				<th>العمر</th>
				<th>نوع المرض</th>
				<th>المبلغ الاجمالي</th>
				<th>المبلغ المتبقي</th>
				<th>اخر موعد للتبرع</th>
				<th>عرض</th>
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
									echo "<td>".$row['age']."</td>";
									echo "<td>".$row['typeDisease']."</td>";
									echo "<td>".$row['TotalِAmount']."</td>";
									echo "<td>".$row['RemainingِAmount']."</td>";
									echo "<td>".$row['last_date_donate']."</td>";

									echo "<td><a href='admin_patient_viewData.php?id=".$row['id']."' class='btn btn-success btn-xs'><i class='fa fa-edit'></i> عرض</a></td>";
									echo "<td><a href='admin_patientUpdate.php?id=".$row['id']."' class='btn btn-primary btn-xs'><i class='fa fa-edit'></i> تعديل</a></td>";
									echo "<td><a href='admin_delete_patient.php?id=".$row['id']."' class='btn btn-danger btn-xs'><i class='fa fa-trash'></i> حذف</a></td>";
									echo "</tr>";
								}
							}
			echo'</table>';

}


function load_patientINLoc($sql,$conn)
{

	$result=$conn->query($sql);
	$n=0;
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
		{
			$TotalِAmount = $row['TotalِAmount'];
			$TheAmountPaid = $row['TheAmountPaid'];
			$RemainingِAmount = $TotalِAmount - $TheAmountPaid;
			$n++;
				if($row["status"]==0 && $TotalِAmount != $TheAmountPaid ){
					echo '
					<div class="col-md-3" >
					<div class="panel panel-primary">
							<div class="panel-heading">
				  '	;

						echo "<h4>".$row['typeDisease']."</h4>";
						echo '</div>
						<div class="panel-body">
							<form>'

									;
				    echo "<label> يعاني من :</label>";
						echo "<label>".$row['DescriptionDisease']."</label><br>";
						echo		" <label > يحتاج الى :</label>";
						echo		 "<label>".$row['need_to']."</label><hr>";
					  echo		"<label >الاجمالي:</label>";
						echo		 "<label>".$row['TotalِAmount']." شيكل </label><br>";
					  echo	"	<label>المدفوع:</label>";
						echo		"<label>".$row['TheAmountPaid']." شيكل </label><br>";
						echo		"<label >المتبقي:</label>";
						echo		"<label>".$RemainingِAmount." شيكل </label><hr>";
						echo		"<label >اخر موعد للتبرع : </label>";
						echo		"<label>".$row['last_date_donate']."</label><hr>";
            echo		"<label >مبلغ التبرع : </label>";
            echo ' <input name="patient_don_amount" type="text" style="margin-right:30px;margin-bottom:20px;" >';

						echo ' <input type="submit" style="margin-right:50px;margin-bottom:20px;"   name="don_for_patient" value="تبرع الان" class="btn py-3 px-5 btn-primary" >
								</form>
							</div>
					</div>

					</div>';
				}
				$id_patient = $row['id'];
}
}
}

function load_smallProjectINLoc($sql,$conn)
{

	$result=$conn->query($sql);
	$n=0;
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
		{
			$n++;
			echo '
			<div class="col-md-4" >
			<div class="panel panel-primary">
					<div >
			'	;
			 echo "<img src=".$row['project_img']."alt='تعذر تحميل الصورة' height='150' width='348'>";
				echo '</div>
				<div >
					<form>'

							;
				echo "<label>".$row['project_title']."</label><br>";
				echo "<label>".$row['project_Desc']."</label><hr>";
				echo		"<label >مالك المشروع :</label>";
				echo		 "<label>".$row['project_owner']."</label><br>";
				echo		"<label >المدينة :</label>";
				echo		 "<label>".$row['city']."</label><hr>";
				echo		"<label >الاجمالي:</label>";
				echo		 "<label>".$row['Total_amount']."شيكل</label><br>";
				echo	"	<label>المدفوع:</label>";
				echo		"<label>".$row['Amount_paid']."</label><br>";
				echo		"<label >المتبقي:</label><br>";
				echo		"<label>".$row['Remaining_amount']."</label>";


				echo ' <input type="text" id="" name="" value="">
							<input type="submit" name="" value="تبرع">
						</form>
					</div>
			</div>

			</div>';
}
}
}

function load_admin_account_patient($sql,$conn)
{
	echo '
				<table class="table table-striped">
				<tr>
				<th>الرقم</th>
				<th>المتبرع</th>
				<th>المتبرع اليه</th>
				<th>مبلغ التبرع</th>
				<th>تاريخ التبرع</th>
				<th>عرض بيانات المتبرع</th>
				<th>عرض بيانات المتبرع اليه</th>
				<th>ارسال المال للمريض</th>
				<th>حالة المريض</th>
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
									echo "<td>".$row['the_doner']."</td>";
									echo "<td>".$row['the_patient']."</td>";
									echo "<td>$".$row['the_dontaion_amount']."</td>";
									echo "<td>".$row['date_donation']."</td>";
									echo "<td><a href='doner_viewData.php?id=".$row['id']."' class='btn btn-success btn-xs'><i class='fa fa-edit'></i> عرض</a></td>";
									echo "<td><a href='admin_patient_viewData.php?id=".$row['id']."' class='btn btn-primary btn-xs'><i class='fa fa-edit'></i> عرض</a></td>";
									echo "<td><a href='admin_delete_patient.php?id=".$row['id']."' class='btn btn-danger btn-xs'><i class='fa fa-trash'></i> ارسال</a></td>";
									echo "<td><a href='doner_viewData.php?id=".$row['id']."' class='btn btn-info btn-xs'><i class='fa fa-edit'></i>تم التبرع اليه بالكامل</a></td>";
									echo "</tr>";
								}
							}
			echo'</table>';

}


?>
