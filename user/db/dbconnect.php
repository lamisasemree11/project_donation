<?php
$server  = "localhost";
$user_db = "root";
$pass_db = "";
$db_name = "projectdonation";
$con = mysqli_connect($server,$user_db ,$pass_db ,$db_name);

if($con){
    // echo 1;
}else{
    echo "Error With Connect DB";
    exit();
}

?>
