<?php
session_start();
require'connect.php';
if(isset($_POST['msg'])){
$msg = $_POST['msg'];
$uname = $_POST['uname'];
$date = $_POST['date'];
$sql = "INSERT INTO posta VALUES('','$msg','$uname','$date')";
mysqli_query($conn,$sql);
header("location:loged.php");
}
?>