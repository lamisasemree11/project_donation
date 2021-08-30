<?php
include("db/dbconnect.php");
global $conn;
include("function.php");

if(isset($_POST["q"])&&$_POST["q"]!="")
{
	$key=$_POST["q"];
	 $sql="SELECT * FROM users WHERE name LIKE '%".$key."%' OR email LIKE '%".$key."%' OR phonenumber LIKE '%".$key."%' ";
	load_users($sql,$conn);

}
else if($_POST["q"]=="")
{
	$sql="Select * from users";
				load_users($sql,$conn);
}

?>
