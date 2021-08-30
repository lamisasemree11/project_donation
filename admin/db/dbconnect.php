<?php
$server  = "localhost";
$user_db = "root";
$pass_db = "";
$db_name = "donation";
$conn = mysqli_connect($server,$user_db ,$pass_db ,$db_name);

if($conn){
    // echo 1;
}else{
    echo "Error With Connect DB";
    exit();
}

?>
