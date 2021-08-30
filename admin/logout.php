<?php
session_start();
unset($_SESSION["pass_admin"]);
session_destroy();
echo "<script>window.open('login.php','_self')</script>";
?>
