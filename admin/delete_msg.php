<?php
include("db/dbconnect.php");
global $conn;
         $id_msg = $_GET['idmag'];
         if(isset($_GET["idmag"])){
           $sql ="DELETE FROM contact WHERE id=$id_msg";
           $q = mysqli_query($conn , $sql);
           if ($q) {
             header("location: msg.php");
           }
         }

 ?>
