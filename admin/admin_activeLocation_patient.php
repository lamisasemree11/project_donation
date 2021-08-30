<?php
include("db/dbconnect.php");
global $conn;
 if(isset($_GET["id"])&&!empty($_GET["id"]))
 {
	 $sql="UPDATE patients SET status='0' WHERE id=".$_GET["id"];
	 $conn->query($sql);
	 header("location:patients.php");
 }
 else
 {
	 header("location:patients.php");
 }

?>
