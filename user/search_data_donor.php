<?php
include("../admin/db/dbconnect.php");
global  $conn;
$City   = $_POST['City'];
$Blood_group   = $_POST['Blood_group'];
global $conn;
// getting data from donor table
$sql = "SELECT * FROM donors WHERE donor_city = '$City' AND donor_blood_group = '$Blood_group'";
$result = mysqli_query($conn,$sql);

if($result->num_rows>0){
					$i=0;
					echo "<div style='margin-top:100px;margin-right:50px;' class='table-responsive '>
                <table class='table table-striped table-bordered'>
							   	<tr class='text-primary'>

									<th>الاسم</th>
									<th>فصيلة الدم</th>
									<th>المدينة</th>
									<th>الجنس</th>
									<th>المستشفى</th>
									<th>رقم التواصل</th>

								</tr>
							";

	while($row=$result->fetch_assoc())
					{
							$i++;
							echo"<tr>";

							echo"<td>{$row["donor_name"]}</td>";
							echo"<td>{$row["donor_blood_group"]}</td>";
							echo"<td>{$row["donor_city"]}</td>";
							echo"<td>{$row["donor_gender"]}</td>";
							echo"<td>{$row["donor_hospital"]}</td>";
							echo"<td>{$row["donor_contactNo"]}</td>";

							echo"</tr>";
						}
					echo "</table></div>";
				}
				else
				{
					echo "<div style='margin-top:100px;margin-right:50px;' class='alert alert-danger'><i class='fa fa-users'></i> لا يوجد متبرعين</div>";
				}


?>
