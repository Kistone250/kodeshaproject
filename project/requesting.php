<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>kodesha.com</title>
</head>
<body>
 <div id="links">
 	<a href="messages.php">Messages</a>
 	 	<a href="upload.php">Upload New Houses</a>
 </div>
 

 <div id="info">
 	<div id="clients">
 		<h3>New Clients</h3>
 
 		<?php
require'connect.php';
$sql="SELECT fname,lname FROM registration ORDER BY lname";

if ($result=mysqli_query($conn,$sql))
  {
  $rowcount=mysqli_num_rows($result);
  printf(" %d clients.\n",$rowcount);
  mysqli_free_result($result);
  }
?>
 	</div>
 	<div id="new">
 			<h3>Requested Houses</h3>
 			<?php
require'connect_request.php';
$sql="SELECT fname,lname FROM request ORDER BY lname";

if ($result=mysqli_query($conn,$sql))
  {
  $rowcount=mysqli_num_rows($result);
  printf(" %d persons.\n",$rowcount);
  mysqli_free_result($result);
  }
?>
 	</div>
 	<div id="requested"><h3>Offered Houses</h3>
<?php
require'connect_request.php';
$sql="SELECT fname,lname FROM offer ORDER BY lname";

if ($result=mysqli_query($conn,$sql))
  {
  $rowcount=mysqli_num_rows($result);
  printf(" %d persons.\n",$rowcount);
  mysqli_free_result($result);
  }
?>
 	</div>
 	<div id="total">	<h3>Available Houses</h3>
 	<?php
require'connect_request.php';
$sql="SELECT image,location FROM upload ORDER by amount ";

if ($result=mysqli_query($conn,$sql))
  {
  $rowcount=mysqli_num_rows($result);
  printf(" %d persons.\n",$rowcount);
  mysqli_free_result($result);
  }
?></div>
 </div>
<a href="logedadmin.php"> OFFERED</a><a href= "req.php">REQUESTS</a>
<h2>REQUESTED HOUSES</h2>
<div id="chat">

	<?php
	
    echo "<table>
    <tr><th>id</th><th>First Name</th><th>last Name</th> <th>Phone</th> <th>Email</th> <th>Location</th> <th> Amount</th><th> Action</th></tr>";
    $sql = "SELECT id, fname, lname,phone,email,location,amount FROM request";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
   echo "
     <td>".$row["id"]."</td> <td>".$row["fname"]."</td><td> ".$row["lname"]."</td><td>".$row["phone"]."</td><td>".$row["email"]."</td><td>".$row["location"]."</td><td>".$row["amount"]."</td></tr></table>"; "</br>";
  }
  echo "</table><br>";
} else {
  echo "0 results";
}

?>
</div>
</body>
</html>
<style type="text/css">
	table{
		padding: 0px;
		margin: 0px;
		width: 100%;
		text-align: center;
	}
	tr:nth-child(even){
		background-color: #f2f2f2;
	}
	th{
		background-color: #04AA6D;
		color: white;
	}
	h2{
		padding-left: 250px;
	}
	a{
		text-decoration: underline;
		margin: 10px;
		padding-left: 300px;
		color: green;
			font-weight: bold;
	}
	a:hover{
		color: red;
	}
	h3{
		color: white;
		text-align: center;
		text-decoration: underline;
	}
	h3:hover{
		color: brown;
	}
	#links{
		background-color: #099999;
		padding: 20px;
		height: 40px;
	}

	body{
		margin: 0px;
		padding: 0px;
	}
	#clients{
	background-color: blue;
		width: 300px;
		height: 200px;
		margin: 30px;
		margin-top: 50px;

	}
	#new{
	background-color:red;
			width: 300px;
		height: 200px;
	margin: 30px;
		margin-top: 50px;
	}
	#requested{
		background-color:green;
			width: 300px;
		height: 200px;
			margin: 30px;
				margin-top: 50px;
	}
	#total{
	background-color:yellow;
			width: 300px;
		height: 200px;
	margin: 30px;
	margin-top: 50px;
	}
	h2{
		margin-left: 250px;
	}
#info{
	display: flex;
	margin-top: 0;
	
	
}
</style>