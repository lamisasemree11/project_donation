<?php
include("db/dbconnect.php");
global $conn;
 if(isset($_GET["idStory"])&&!empty($_GET["idStory"]))
 {
	 $sql="UPDATE mystory SET status='1' WHERE id=".$_GET["idStory"];
	 $conn->query($sql);
	 header("location:poor_story.php");
 }
 else
 {
	 header("location:poor_story.php");
 }

?>
