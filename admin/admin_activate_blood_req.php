<?php
include("db/dbconnect.php");
global $conn;
 if(isset($_GET["id"])&&!empty($_GET["id"]))
 {
	 $sql="UPDATE request_blood SET status='0' WHERE id=".$_GET["id"];
	 $conn->query($sql);
	 header("location:admin_need_blood.php");
 }
 else
 {
	 header("location:admin_need_blood.php");
 }

?>
