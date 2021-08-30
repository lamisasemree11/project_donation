<?php
include("db/dbconnect.php");
global $conn;

 if(isset($_GET["id"]))
 {
	 $id=$_GET["id"];
	 echo $sql="DELETE FROM patients WHERE id=$id";
	 $conn->query($sql);
	 header("location:patients.php");
 }


?>
