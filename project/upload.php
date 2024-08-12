
<?php
require"connect_request.php";
if (isset($_POST['submit'])){
	$location = $_POST['location'];
$amount = $_POST['amount'];
$description = $_POST['description'];
$imagecount = count($_FILES['image']['name']);
for($i=0;$i<$imagecount;$i++){
	$imageName = $_FILES['image']['name'][$i];
$imageTempName = $_FILES['image']['tmp_name'][$i];
$targetpath = "./images/".$imageName;
if(move_uploaded_file($imageTempName, $targetpath)){
	$sql = "INSERT INTO upload VALUES ('','$imageName','$location','$amount','$description')";
	$result = mysqli_query($conn,$sql);
}
}
if($result){
	header('location:index.php');
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
<a href="logedadmin.php">Back to Admin Panel</a>
</div>
<h1> ADMINS ONLY!!!</h1>
<div id="form">
	<form action="upload.php" method="POST" enctype="multipart/form-data" >
	<p>Enter Property Location:</p><input type="text" name="location" >
<p>Enter Maximum amount:</p><input type="text`" name="amount" ><br>
<p>Property description:</p><input type="text`" name="description" ><br>
<input type="file" name="image[]" id="image" multiple>
		<button type="submit" name="submit" >upload</button>

</form>
</body>
</html>
<style type="text/css">
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