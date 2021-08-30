<?php
include("db/dbconnect.php");
global $conn;
         $id_comment = $_GET['idComment'];
         if(isset($_GET["idComment"])){
           $sql ="DELETE FROM comment WHERE comment_id=$id_comment";
           $q = mysqli_query($conn , $sql);
           if ($q) {
             header("location: comment.php");
           }
         }

 ?>
