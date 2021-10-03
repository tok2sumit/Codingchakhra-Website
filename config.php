<?php
	// $servername = 'localhost';
	// $user = 'root';
	// $pass = '';
	// $dbname = 'e-learning';

	// Connections for remote database

	$servername = 'remotemysql.com';
	$user = 'oRbHbVB5a9';
	$pass = 'aC3S7xQuqZ';
	$dbname = 'oRbHbVB5a9';

	$conn = mysqli_connect($servername,$user,$pass,$dbname);

	if(!$conn){
		die("Could Not Connect to the database".mysqli_connect_error());
	}

?>
