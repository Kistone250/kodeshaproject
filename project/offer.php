<?php
require"connect_request.php";
if(isset($_POST['submit'])){
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phone= $_POST['phone'];
$email = $_POST['email'];
$location = $_POST['location'];
$amount = $_POST['amount'];
$date = $_POST['date'];
if(empty($fname) OR empty($lname) OR empty($phone) OR empty($email) OR empty($location) OR empty($amount) OR empty($date)){
	echo "<script> alert (' All fields must be filled')</script>";
}
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
	echo "<script> alert (' Email not valid')</script>";
}
	else{
		$query = "INSERT INTO offer VALUES ('','$fname','$lname','$phone','$email','$location','$amount','$date')";
		mysqli_query($conn,$query);
		$insertdate = date('Y-m-d', strtotime($_POST['date']));
		echo "<script> alert ('Registration successful click ok to proceed')</script>";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Kodesha.com</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div id="links">
			<img src="proj.jpg" style="width:5%; height:6%; background-color: transparent; border-radius: 50px; float: right; margin-top: 0px; padding: 0px; margin-right: 10px;">
<a href="reg.php">Registration</a>
<a href="req.php">Request Property</a>
<a href="login.php">Login</a>
<a href="admin.php">Admin</a>
</div>
<h1> REQUEST PROPERTY!!!</h1>
<div id="form">
	<form action="offer.php" method="POST" enctype="multipart/form-data" >
		<p>Enter First Name:</p><input type="text" name="fname" autocomplete="off">
	<p>Enter Last Name:</p><input type="text" name="lname"  >
	<p>Enter Phone number:</p><input type="text" name="phone" >
	<p>Enter Email:</p><input type="text" name="email"  >
	<p>Enter  property location:</p><input type="text" name="location"  >
	<p>Amount:</p><input type="text" name="amount"  >
	<p>Offering date:<input type="date" name="date" ></p>
		<button type="submit" name="submit" >Offer</button>
	</form>
</div>
<div id="footer">
	<a href="index.php">HOME</a>
	<a href="service.php">SERVICES</a>
	<a href="about.php.php">ABOUT US</a>
	<a href="contacts.php">CONTACTS</a>
	<span><p>Copyright&copy KODESHA 2023.All Right Reserved</p>

	<p><i class="fa fa-location"></i>Kigali City-Nyarugenge</p>
<p><i class="fa fa-phone"></i>+250798259610</p>
<p><i class="fa fa-envelope"></i>Email:denisquavo@gmail.com</p>
<p>Follow us on:<i class="fa fa-facebook"></i>
	<i class="fa fa-instagram"></i>
		<i class="fa fa-twitter"></i>
</span>
  </div>
  </div>
	</body>
</html>
<style type="text/css">
	input[type="file"]{
		margin-top: 20px;
		margin-left: 70px;
		margin-bottom: 20px;
	}
	span{
		color: white;
		text-align: center;
	}
	#links{
		background-color: #099999;
		padding: 20px;
	}
	body{
		padding: 0px;
		margin: 0px;
	}
	a{
		color: white;
		padding: 20px;
		text-decoration: none;
	}
	a:hover{
color:brown;
	}
	#form{
		margin-top: 40px;
border-style: solid;
width: 900px;
margin-left: 180px;
border-radius: 10px;
box-shadow: 10px 10px 8px 10px#888888;
margin-bottom: 40px;
	}
	input[type="text"]{
		display: block;
		width: 700px;
		height: 25px;
		margin-left: 70px;
		border-radius: 5px;

	}
	input[type="password"]{
		display: block;
		width: 700px;
		height: 25px;
		margin-left: 70px;
		border-radius: 5px;

	}
	p{
		margin-left: 70px;;
	}
	button{
		margin-top: 30px;
		margin-left: 450px;
		margin-bottom: 10px;
	}
	h1{
		font-family: cooper;
		text-align: center;
	}
	.fa {
  font-size: 30px;
  width: 30px;
  text-align: center;
  text-decoration: none;
    border-radius: 150%;
    padding: 5px;
}

.fa:hover {
  opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}
.fa-location{
  color: white;
}
.fa-instagram {
  background: #991515;
  color: white;
}

		.fa-twitter {
  background: #55ACEE;
  color: white;
}
	#footer{
		background-color: #121217;
		padding: 20px;
	}
	
	@media only screen and (min-width: 300px) and (max-width: 800px){
		#form{
			width: 90%;
			margin-left: 20px;
			margin-bottom: 20px;
			
		}
		input[type="text"]{
			width: 70%;
	
		}
		input[type="password"]{
			width: 70%;
	
		}
		button{
			margin-left:200px ;
		}	
		a{
			padding: 10px;
		}	}
</style>