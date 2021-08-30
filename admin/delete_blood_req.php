<?php
include("db/dbconnect.php");
global $conn;
 if(isset($_GET["id"]))
 {
	 $id=$_GET["id"];
	 echo $sql="DELETE FROM request_blood WHERE id=$id";
	 $conn->query($sql);
	 header("location:admin_need_blood.php");
 }


?>
