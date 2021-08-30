<?php
include("db/dbconnect.php");
global $conn;
 if(isset($_GET["id_gift"])&&!empty($_GET["id_gift"]))
 {
	 $sql="UPDATE gifts SET status_don='1' WHERE id_gift=".$_GET["id_gift"];
	 $conn->query($sql);
	 header("location:gifts_don.php");
 }
 else
 {
	 header("location:gifts_don.php");
 }

?>
