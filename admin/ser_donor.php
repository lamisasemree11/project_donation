<?php
include("db/dbconnect.php");
global $conn;
include("function.php");

if(isset($_POST["q"])&&$_POST["q"]!="")
{
	$key=$_POST["q"];
	 $sql="SELECT * FROM donors WHERE donor_name LIKE '%".$key."%' OR donor_city LIKE '%".$key."%' OR donor_gender LIKE '%".$key."%' OR donor_blood_group LIKE '%".$key."%' OR donor_email LIKE '%".$key."%' OR donor_hospital LIKE '%".$key."%' OR donor_contactNo LIKE '%".$key."%'  ";
	load_donor($sql,$conn);

}
else if($_POST["q"]=="")
{
	$sql="Select * from donors";
				load_donor($sql,$conn);
}

?>
