<?php

	$servername = "localhost:3306";
	$dbname = "wheelsup";
	$username = "root";
	$password = "";

	$conn = mysqli_connect($servername,$username,$password,$dbname);
	
	if(! $conn)
	{
		die('could not connect to database !<br>'.mysqli_error());
	}

?>
