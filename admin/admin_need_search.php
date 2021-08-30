<?php
include("db/dbconnect.php");
global $conn;
include("function.php");
if(isset($_POST["q"])&&$_POST["q"]!="")
{
	$key=$_POST["q"];
	 $sql="SELECT * FROM request_blood WHERE name LIKE '%".$key."%' OR city LIKE '%".$key."%' OR blood_group LIKE '%".$key."%' OR gender LIKE '%".$key."%' OR contactNum LIKE '%".$key."%' OR email LIKE '%".$key."%'";
	load_people_need($sql,$conn);

}
else if($_POST["q"]=="")
{
	$sql="Select * from request_blood";
				load_people_need($sql,$conn);
}

?>
