<?php
include("db/dbconnect.php");
global $conn;
include("function.php");

if(isset($_POST["q"])&&$_POST["q"]!="")
{
	$key=$_POST["q"];
	 $sql="SELECT * FROM patients WHERE fullName LIKE '%".$key."%' OR patientID LIKE '%".$key."%' OR age LIKE '%".$key."%' OR typeDisease  LIKE '%".$key."%'";
	load_patient($sql,$conn);

}
else if($_POST["q"]=="")
{
	$sql="Select * from patients";
				load_patient($sql,$conn);
}

?>
