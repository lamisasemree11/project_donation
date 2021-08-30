<?php
include("db/dbconnect.php");
global $conn;
 if(isset($_GET["idProject"])&&!empty($_GET["idProject"]))
 {
	 $sql="UPDATE smallproject SET project_status='0' WHERE project_id=".$_GET["idProject"];
	 $conn->query($sql);
	 header("location:small_Project.php");
 }
 else
 {
	 header("location:small_Project.php");
 }

?>
