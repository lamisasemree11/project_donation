<?php
include("db/dbconnect.php");
global $conn;
 if(isset($_GET["id_don_for_patient"])&&!empty($_GET["id_don_for_patient"]))
 {
	 $sql="UPDATE don_for_patients SET status_don='1' WHERE id_don_for_patient=".$_GET["id_don_for_patient"];
	 $conn->query($sql);
	 header("location:patient_don.php");
 }
 else
 {
	 header("location:patient_don.php");
 }

?>
