<?php
include("db/dbconnect.php");
global $conn;
 if(isset($_GET["id_don_project"])&&!empty($_GET["id_don_project"]))
 {
	 $sql="UPDATE don_for_project SET status_don='1' WHERE id_don_project=".$_GET["id_don_project"];
	 $conn->query($sql);
	 header("location:project_dons.php");
 }
 else
 {
	 header("location:project_dons.php");
 }

?>
