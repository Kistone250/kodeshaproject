
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
		<img src="proj.jpg" style="width:5%; height:6%; background-color: transparent; border-radius: 50px; float: right; margin-top: 0px; padding: 0px; margin-right: 10px;">
<a href="reg.php">Registration</a>
<a href="req.php">Request Property</a>
<a href="login.php">Login</a>
<a href="admin.php">Admin</a>
<input type="text" onkeyup="showResult(this.value)" name="location" placeholder="Enter House location">
<input type="text" onkeyup="showResult(this.value)" name="amount" placeholder="Enter maximum amount">
<input type="submit" name="search" value="search">
<div id="display"></div>
</form>
</div>

<h1>AVAILABLE HOUSES!!!</h1>
<div id="card">
		<?php
require"connect_request.php";
$sql ="SELECT * FROM upload";
$result =mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
	while ($fetch = mysqli_fetch_assoc($result)) {
?>
<div id="image">

<a href="display.php"><img src="images/<?php echo urlencode($fetch['image']);?>"></a>
<div id=foot>
<h6>	Location:</h6>
	<h6>	Amount:</h6>
	<h6>	Description:</h6>
	</div>
</div>
<?php
}
}
?>
<div id="container">
	<div id="pagination">
		<button class="btn1">prev</button>
		<ul>
			<li class="link active" value="1" onclick = "activeLink()">1</li>
					<li class="link" value="2" onclick="activeLink()">2</li>
							<li class="link" value="3" onclick="activeLink()">3</li>
									<li class="link" value="4" onclick="activeLink()">4</li>
											<li class="link" value="5" onclick="activeLink()">5</li>
													<li class="link" value="6" onclick="activeLink()">6</li>
															<li class="link" value="7" onclick="activeLink()">7</li>
		</ul>
		<button class="btn1">next</button>
	</div>
</div>
<div id="info">
	<span>
		<h5>Find Your Perfect Student rental Home with Ease</h5>
<p>Welcome to KODESHA.com, the ultimate platform designed exclusively for CST students. We specialize in connecting CST students with the perfect rental homes. Our website features an extensive list of verified properties tailored to meet the needs of CST students. Whether you are looking for affordability, proximity to campus, or specific amenities, we've got you covered. With KODESHA your ideal rental home is just one click away.</p></span>
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
<script>
	let link = document.getElementsByClassName("link");
	let currentvalue = 1;
	function activeLink(){
		for(1 of link){
			1.activeList.remove("active")
		}
	}
</script>
</body>
</html>

<style type="text/css">
	h6{
		text-decoration: underline;
		margin-left: 10px;
		padding: 1px;
	}
	#pagination{
		display: flex;
		align-items: center;
		background: #fff;
		color: #383838;
		padding: 8px 4px;
		border-radius: 6px;
	}
	ul{
		margin: 10px 20px;
	}
	ul li{
		display: inline-block;
		margin-left: 0px 35px;
		width: 45px;
		height: 45px;
		border-radius: 50%;
		text-align: center;
		font-size: 22px;
		font-weight: 500;
		line-height:45px;
		cursor: pointer;
	}
	.btn1 .btn2{
		display: inline-flex;
		align-items: center;
		font-size: 22px;
	font-weight: 500;
	color: #383838;
	background: transparent;
	outline: none;
	border: none;
	cursor: pointer;
	}
	ul li.active{
color:#fff;
background-image: linear-gradient(#ff4468,#ff4468);
background-repeat: no-repeat;
	}
	li:hover{
		background-color: gray;
	}
	#container{
		margin-left: 300px;
		border: 2px;
		color: black;
		background-color:#099999 ;
	}
	#foot{
	height: 100px;
	width: 350px;
	border: 1px;
	border-style: solid;
	margin-left: 35px;
	margin-top: 1px;
	position: relative;
	box-shadow: 2px 8px 8px 8px#888888;
}
#image{
	display: inline-block;
}
	#description{
		color: gray;
		font-size: 18px;
	}
	
	button:hover{
		color: black;
		background-color: gray;
	}
	img{
		width: 350px;
		height: 280px;
		margin-left: 0px;
		display: inline-block;
		position: relative;
		margin-top: 10px;
		box-shadow: 8px 8px 8px 0px#888888;
	}
	#info{
		background-color: #099999;
		padding: 10px;
		margin-top: 150px;
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
		padding: 10px;
		height: 80px;
	}
	body{
		padding: 0px;
		margin: 0px;
	}
	a{
		color: white;
		padding: 10px;
		text-decoration: none;
		margin-left: 25px;
		margin-top: 20px;
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
	}
	h5{
		color: brown;
		font-family: algerian;
		text-decoration: underline;
	}
	
	@media only screen and (min-width: 100px) and (max-width: 500px){
		#form{
			width: 90%;
			margin-left: 20px;
			margin-bottom: 20px;
			
		}
		input[type="text"]{
			width: 20%;
			margin:auto;

	
		}
		input[type="password"]{
			width: 70%;
	
		}
		button{
			margin-left:200px ;
		}	
		a{
			margin: auto;
		}
		#links{
			padding: 10px;
			margin-top: 20px;
		}
	img{
		margin:auto;
		padding-top: 6px;
	}
	#foot{
		margin:auto;
		padding-top: 6px;
	}
	a{
		text-decoration: underline;
		margin-bottom: 50px;
	}
	body{
		padding: 0px;
		margin: 0px;
	}  
</style>
