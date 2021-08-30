<?php
include("db/dbconnect.php");
global $conn;
         $id_story = $_GET['idStory'];
         if(isset($_GET["idStory"])){
           $sql ="DELETE FROM mystory WHERE id=$id_story";
           $q = mysqli_query($conn , $sql);
           if ($q) {
             header("location: poor_story.php");
           }
         }

 ?>
