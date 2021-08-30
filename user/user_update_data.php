<?php

include("../inc/dbconnect.php");
global $conn;
if(isset($_GET["id"])){

      $name   = filter_var($_POST['userName'], FILTER_SANITIZE_STRING);
      $email   = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
      $newpass   = filter_var($_POST['newpass'], FILTER_SANITIZE_STRING);
      $phone   = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
      $sql = "UPDATE 'users' SET `name`=[$name],`email`=[$email],`password`=[$newpass],`phonenumber`=[$phone] WHERE 'id'=.$_GET['id']";
      $q = mysqli_query($conn , $sql);
      if ($q) {
         header('location: profile.php?id='.$_GET["id"]);
      } else {
           header('location: update_profile.php?id='.$_GET["id"]);
      }
    }

 ?>
