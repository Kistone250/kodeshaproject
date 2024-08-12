<?php
$hostname = "localhost";
$username ="root";
$password ="";
$database ="uploading";
 $conn = mysqli_connect($hostname,$username,$password,$database);
 if(!$conn){
 	die("connection failed");

 mysqli_close($conn);
  }
?>