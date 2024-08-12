
<link rel="stylesheet"  href="w3.css">
</head>
<body>
<div id="links">
	<form action="index.php" method="POST">
<a href="reg.php">Registration</a>
<a href="req.php">Request Property</a>
<a href="login.php">Login</a>
<a href="admin.php">Admin</a>
</form>
</div>
<?php
require"connect_request.php";
if (isset($_GET['image'])) {
    $image = urldecode($_GET['image']);
    $imagePath = 'uploads/' . $image;
    $dataFile = 'data.json';
    $data = file_exists($dataFile) ? json_decode(file_get_contents($dataFile), true) : [];

    if (file_exists($imagePath) && isset($data[$image])) {
        ?>
        
            <h1>Image Details</h1>
               <img src="<?php echo htmlspecialchars($image); ?>" alt="<?php echo htmlspecialchars($name); ?>">
            <p>Filename: <?php echo htmlspecialchars($image); ?></p>
            <p>Description: <?php echo htmlspecialchars($data[$image]['description']); ?></p>
            <p>Upload Time: <?php echo htmlspecialchars($data[$image]['upload_time']); ?></p>
            <!-- Add any additional information here -->
            <br>
            <a href="index.php">Go back to Home</a>
        </body>
        </html>
        <?php
    } else {
        echo "Image not found or no additional information available.";
    }
} else {
    echo "No image specified.";
}
?>


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