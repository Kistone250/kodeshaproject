

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>kodesha.com</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet"  href="w3.css">
</head>
<body>
<div id="links">
	<form action="index.php" method="POST">
<a href="reg.php">Registration</a>
<a href="req.php">Request Property</a>
<a href="login.php">Login</a>
<a href="admin.php">Admin</a>
<input type="text" onkeyup="showResult(this.value)" name="location" placeholder="Enter House location">
<input type="submit" name="search" value="search">
</form>
</div>

<div id="footer">
	<a href="index.php">HOME</a>
	<a href="service.php">SERVICES</a>
	<a href="about.php">ABOUT US</a>
	<a href="contacts.php">CONTACTS</a>
	<span><p>Copyright&copy KODESHA 2023.All Right Reserved</p>

	<p><i class="fa fa-location"></i>Kigali City-Nyarugenge</p>
<p><i class="fa fa-phone"></i>+250798259610</p>
<p><i class="fa fa-envelope"></i>Email:denisquavo@gmail.com</p>
<p>Follow us on:
	<i class="fa fa-facebook"></i>
	<i class="fa fa-instagram"></i>
		<i class="fa fa-twitter"></i>
<a href="https://wa.me/0798259610" target="_blank">
    <i class="fa fa-whatsapp"></i>
</a>
</p>
</body>
</html>

<style type="text/css">
	#side{
			display: inline-block;
			
	}
	#container{
		margin-left: 320px;
	}
h4{
text-align: center;
color: brown;
text-decoration: underline;
}
	#foot{
	height: 50px;
	width: 350px;
	border: 1px;
	border-style: solid;
	margin-left: 19px;
	margin-top: 0px;
	position: relative;
}
#image{
	display: inline-block;
}
	#description{
		color: gray;
		font-size: 18px;
	}
	
	button{
		border: none;
		outline: 0;
		display: inline-block;
		padding: 8px;
		color: white;
		background-color: #000;
		text-align: center;
		cursor: pointer;
		width: 30%;
		font-size: 18px;
		border-radius: 5px;
	}
	button:hover{
		color: black;
		background-color: gray;
	}
	img{
		width: 350px;
		height: 350px;
		margin-left: 0px;
		display: inline-block;
		position: relative;
		margin-top: 10px;
		
	}
	#info{
		border: 2px;
		border-style: solid;
		border-radius: 10px;
		padding: 10px;
		width:300px;
		margin-left: 20px;
		position: fixed;

	}
	#footer{
		background-color: black;
		padding: 5px;
	}
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
		width: 2000px;
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
width: 1100px;
margin-left: 100px;
border-radius: 10px;
box-shadow: 10px 10px 8px 10px#888888;
margin-bottom: 40px;
	}
	input[type="password"]{
		display: block;
		width: 700px;
		height: 25px;
		margin-left: 70px;
		border-radius: 5px;

	}
	p{
		margin-left: 0px;;
	}
	button{
		margin-top: 10px;
		margin-left: 20px;
	}
	h1{
		font-family: cooper;
		text-align: center;
		margin-top: 40px;
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
		}
		#links{
			padding: 10px;
			margin-top: 20px;
		}
  }
</style>
