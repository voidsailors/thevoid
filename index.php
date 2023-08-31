<!DOCTYPE html>
<html>

	<head>
		
		<script src="script.js"></script>
		<link rel="stylesheet" href="main.css">

	</head>

	<body onload="websiteloaded()">
		
		<?php

		$servername = "testdatabase.cbius0b0ygew.eu-north-1.rds.amazonaws.com";
		$name = "admin";
		$password = "!Brex1234!";
		$dbname = "maindatabase";

		$conn = mysqli_connect($servername,$name,$password,$dbname);

		if(!$conn){

		print("Connection failed");

		}

		if($conn){

		print("Connection succesful");

		}

		?>

	</body>

</html>