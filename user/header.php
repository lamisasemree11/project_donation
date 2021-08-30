<?php
include("../admin/db/dbconnect.php");
global $conn;

if(isset($_GET["id"]))
{
  $sql="SELECT * FROM users WHERE id=".$_GET["id"];
  $result=$conn->query($sql);
  if($result->num_rows>0)
  {
    $row=$result->fetch_assoc();
}
}
?>
<!DOCTYPE html>
<html lang="en" dir="rtl">
  <head>
    <title>كنوز الخير</title>
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


  </head>
  <body>

	  <div class="bg-top navbar-light d-flex flex-column-reverse">
    	<div class="container py-3">
    		<div class="row no-gutters d-flex align-items-center align-items-stretch">
    			<div class="col-md-4 d-flex align-items-center py-4">
    				<a class="navbar-brand" href="index.html">كنوز  الخير<span>موقع التبرعات الالكتروني</span></a>
    			</div>
	    		<div class="col-lg-8 d-block">
		    		<div class="row d-flex">
					    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-3">
					    	<div class="icon d-flex justify-content-center align-items-center"><span class="ion-ios-paper-plane"></span></div>
					    	<div class="text">
					    		<span style="text-align:right;">البريد الالكتروني</span>
						    	<span>youremail@email.com</span>
						    </div>
					    </div>
					    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
					    	<div class="icon d-flex justify-content-center align-items-center"><span class="ion-ios-call"></span></div>
						    <div class="text">
						    	<span style="text-align:right;">رقم الجوال</span>
						    	<span>+123 523 5598</span>
						    </div>
					    </div>
              <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                <div class="icon d-flex justify-content-center align-items-center"><span class="ion-ios-map"></span></div>
                <div class="text">
                  <span style="text-align:right;">العنوان</span>
                  <span> 198 West 21th Street, Suite 721 New York NY 10016</span>
                </div>
              </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
	  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container d-flex align-items-center">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul  class="navbar-nav mr-auto navbar-nav navbar-nav-right">
            <li class="nav-item "><a style="color:blue;font-size:20px;" href="#" class="nav-link"> مرحبا <?php echo $row["name"];?></a></li>
	        	<li class="nav-item "><a href=<?php echo 'pagesite.php?id='.$row["id"];?>  class="nav-link">الرئيسية</a></li>
            <li class="nav-item"><a href="#programs" class="nav-link">برامجنا </a></li>
            <li class="nav-item"><a href=<?php echo 'contact.php?id='.$row["id"];?>  class="nav-link">تواصل معنا</a></li>
           <li class="nav-item"><a href=<?php echo 'MyStory.php?id='.$row["id"];?>  class="nav-link">انشر قصتي</a></li>
           <li class="nav-item"><a href=<?php echo 'MyProject.php?id='.$row["id"];?>   class="nav-link">انشر مشروعي</a></li>
            <li class="nav-item"><a href=<?php echo 'profile.php?id='.$row["id"];?>   class="nav-link">البروفايل</a></li>
            <li class="nav-item"><a  href="logout.php"   class="nav-link">خروج</a></li>

          </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
