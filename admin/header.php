<?php

include("db/dbconnect.php");
global $conn;

?>
<!DOCTYPE html>
<html lang="en" dir="rtl">
  <head>
    <title>كنوز الخير - مسؤول النظام</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <style media="screen">
      body{
        background-color: #DCDCDC;
      }

    </style>
  </head>
  <body>

    <div class="bg-top navbar-light d-flex flex-column-reverse" >

        <div class="container py-3">
          <div class="row no-gutters d-flex align-items-center align-items-stretch">
            <div class="col-md-4 d-flex align-items-center py-4">
              <a class="navbar-brand" style="color:blue;padding-left:50px;" href="index.html">كنوز الخير<span style="color:green;">مسؤول النظام</span></a>
            </div>
            <div class="col-lg-8 d-block">
              <div class="row d-flex">

              </div>
            </div>
          </div>
        </div>
      </div>
      <nav class="navbar navbar-expand-lg  " id="ftco-navbar" style="background-color:#4682B4;" >
        <div class="container d-flex align-items-center" >

          <div class="collapse navbar-collapse" id="ftco-nav" >

            <ul  class="navbar-nav mr-auto" style="margin-left:100px;">
              <li class="nav-item" ><a href="admin.php" class="nav-link" style="margin-left:10px;color:white;font-size:18px;">الرئيسية</a></li>
              <li class="nav-item"><a href="users.php" class="nav-link" style="margin-left:10px;color:white;font-size:18px;">المستخدمين</a></li>
              <li class="nav-item"><a href="donations.php" class="nav-link" style="margin-left:10px;color:white;font-size:18px;">التبرعات</a></li>
              <li class="nav-item"><a href="msg.php" class="nav-link" style="margin-left:10px;color:white;font-size:18px;">الرسائل</a></li>
             <li class="nav-item"><a href="comment.php" class="nav-link" style="margin-left:10px;color:white;font-size:18px;">التعليقات</a></li>
             <li class="nav-item"><a href="blood_don.php" class="nav-link" style="margin-left:10px;color:white;font-size:18px;">التبرع بالدم</a></li>
              <li class="nav-item"><a href="patients.php" class="nav-link" style="margin-left:10px;color:white;font-size:18px;">كفالة المرضى</a></li>
              <li class="nav-item"><a href="small_Project.php" class="nav-link" style="margin-left:10px;color:white;font-size:18px;">مشاريع صغيرة</a></li>
             <li class="nav-item"><a href="poor_story.php" class="nav-link" style="margin-left:10px;color:white;font-size:18px;">قصص الفقراء</a></li>
             <li class="nav-item"><a href="" class="nav-link" style="margin-left:10px;color:white;font-size:18px;">الدردشة</a></li>
             <li class="nav-item"><a href="logout.php" class="nav-link" style="margin-left:10px;color:white;font-size:18px;">خروج</a></li>

            </li>
            </ul>

          </div>
        </div>
      </nav>
