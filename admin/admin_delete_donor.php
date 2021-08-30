<?php
include("db/dbconnect.php");
global $conn;
 if(isset($_GET["id"]))
 {
	 $id=$_GET["id"];
	 echo $sql="DELETE FROM donors WHERE donor_id=$id";
	 $conn->query($sql);
	 header("location:blood_don.php");
 }


?>
