<?php
require'connect.php';
if(isset($_POST['submit'])){
	$uname = $_POST['uname'];
	$password = $_POST['password'];
	$result = mysqli_query($conn, "SELECT * FROM admin WHERE uname = '$uname' ");
	$row = mysqli_fetch_assoc($result);
	if(mysqli_num_rows($result)>0){
if($password == $row["password"]){
	$_SESSION['login'] = true;
	$_SESSION['id'] = $row["id"];
	header("Location: logedadmin.php");
	}
	else{

echo "<script> alert (' Wrong password please try again')</script>";
}
}

else{
	echo "<script> alert (' You are not an admin')</script>";
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
<h1> ADMINS ONLY!!!</h1>
<div id="form">
<form action="admin.php" method="POST" autocomplete="off">
	<p>Enter Username:</p><input type="text" name="uname" autocomplete="off">
	<p>Enter Password:</p><input type="password" name="password">
	<button type="submit" name="submit" >Login</button>
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
	#footer{
		background-color: #121217;
		padding: 20px;
		margin-top: 40px;
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
	}
	input{
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
	@media only screen and (min-width: 300px) and (max-width: 800px){
		#form{
			width: 90%;
			margin-left: 20px;
			
		}
		input{
			width: 70%;
		}
		button{
			margin-left:200px ;
		}
	a{
		padding: 10px;
	}
	span{
		padding: 20px;
	}	
		}
	
</style>