<?php 
	$hostname   = "server_Address"; 
	$username   = "username";
	$password   = "password";
	$table_name = "existing_table";
	
	$conn = new mysqli($hostname, $username, $password, $table_name);
	
	if($conn->connect_error){
		die('Failed to connect' . $conn->connect_error);
	}
?>