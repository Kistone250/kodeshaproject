<?php
require'connect.php';
echo "<script> alert (' User not found please register')</script>";
$_SESSION=[];
session_unset();
session_destroy();
header("Location:login.php");
?>