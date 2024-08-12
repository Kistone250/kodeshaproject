<?php
$hostname = "localhost";
$username ="root";
$password ="";
$database ="connect_request";
 $conn = mysqli_connect($hostname,$username,$password,$database);
 if(!$conn){
 	die("connection failed");

 mysqli_close($conn);
  }
?>