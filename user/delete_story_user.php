
<?php
include("../admin/db/dbconnect.php");
global $conn;
         $id = $_GET['id'];
         $id_story= $_GET['id_story'];
         if(isset($_GET["id_story"])){
           $sql ="DELETE FROM mystory WHERE id=$id_story";
           $q = mysqli_query($conn , $sql);
           if ($q) {
             header("location: my_user_story.php?id=".$id);
           }
         }

 ?>
