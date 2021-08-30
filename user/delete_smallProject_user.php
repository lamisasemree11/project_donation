<?php
include("../admin/db/dbconnect.php");
global $conn;
         $id = $_GET['id'];
         $id_project = $_GET['id_project'];
         if(isset($_GET["id_project"])){
           $sql ="DELETE FROM smallproject WHERE project_id=$id_project";
           $q = mysqli_query($conn , $sql);
           if ($q) {
             header("location: my_user_project.php?id=".$id);
           }
         }

 ?>
