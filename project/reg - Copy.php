<?php
require"connect.php";
if(isset($_POST['submit'])){
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phone= $_POST['phone'];
$email = $_POST['email'];
$uname = $_POST['uname'];
$password = $_POST['password'];
$confirm = $_POST['confirm'];
$duplicate = mysqli_query($conn, "SELECT * FROM registration WHERE uname ='$uname' OR email ='$email'");
if(mysqli_num_rows($duplicate)>0){
	echo "<script> alert (' username or email has already been taken')</script>";
}
if(empty($fname) OR empty($lname) OR empty($phone) OR empty($email) OR empty($uname) OR empty($password) OR empty($confirm)){
	echo "<script> alert (' please insert something')</script>";
}
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
	echo "<script> alert (' Email not valid')</script>";
}else{
	if($password == $confirm){
		$query = "INSERT INTO registration VALUES ('','$fname','$lname','$phone','$email','$uname','$password','$confirm')";
		mysqli_query($conn,$query);
		echo "<script> alert ('Registration successful click ok to proceed')</script>";
	}
	else{
		echo "<script> alert (' password does not match')</script>";
	}
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>kodesha.com</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div id="links">
<a href="reg.php">Registration</a>
<a href="req.php">Request Property</a>
<a href="login.php">Login</a>
<a href="admin.php">Admin</a>
</div>
<h1> REGISTER HERE!!!</h1>
<div id="form">
<form action="reg.php" method="POST" autocomplete="off">
	<p>Enter First Name:</p><input type="text" name="fname" autocomplete="off">
	<p>Enter Last Name:</p><input type="text" name="lname"  >
	<p>Enter Phone number:</p><input type="text" name="phone" >
	<p>Enter Email:</p><input type="text" name="email"  >
	<p>Enter Username:</p><input type="text" name="uname"  >
	<p>Enter Password:</p><input type="password" name="password"  >
	<p>Confirm Password:</p><input type="password" name="confirm" >
	<p><input type="checkbox" name="agree"> By registering you agree to our terms and conditions???</p>
<button type="submit" name="submit" >Register</button>
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
.fa:hover {
  opacity: 0.7;
}
.fa-whatsapp {
  background: green;
  color: white;
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
		margin: 10px;
		margin-left: 400px;
	}
	h1{
		font-family: cooper;
		text-align: center;
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