<?php
include("db/dbconnect.php");
global $conn;
 if(isset($_GET["idgeneral_don"])&&!empty($_GET["idgeneral_don"]))
 {
	 $sql="UPDATE general_don SET status_don='1' WHERE id_general_don=".$_GET["idgeneral_don"];
	 $conn->query($sql);
	 header("location:donations.php");
 }
 else
 {
	 header("location:donations.php");
 }

?>
