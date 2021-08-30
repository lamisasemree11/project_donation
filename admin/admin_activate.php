<?php
include("db/dbconnect.php");
global $conn;
 if(isset($_GET["id"])&&!empty($_GET["id"]))
 {
	 $sql="UPDATE donors SET status='1' WHERE donor_id=".$_GET["id"];
	 $conn->query($sql);
	 header("location:blood_don.php");
 }
 else
 {
	 header("location:blood_don.php");
 }

?>
