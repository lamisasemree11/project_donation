<?php
include("db/dbconnect.php");
global $conn;
 if(isset($_GET["id_don_story"])&&!empty($_GET["id_don_story"]))
 {
	 $sql="UPDATE  don_for_story SET status_don='1' WHERE id_don_story=".$_GET["id_don_story"];
	 $conn->query($sql);
	 header("location:story_dons.php");
 }
 else
 {
	 header("location:story_dons.php");
 }

?>
