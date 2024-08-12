<?php
$hostname = "localhost";
$username ="root";
$password ="";
$database ="register";
 $conn = mysqli_connect($hostname,$username,$password,$database);
 if(!$conn){
 	die("connection failed");

 mysqli_close($conn);
  }
?>