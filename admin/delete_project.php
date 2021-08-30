<?php
include("db/dbconnect.php");
global $conn;
         $id_project = $_GET['idProject'];
         if(isset($_GET["idProject"])){
           $sql ="DELETE FROM smallproject WHERE project_id =$id_project";
           $q = mysqli_query($conn , $sql);
           if ($q) {
             header("location: small_Project.php");
           }
         }

 ?>
