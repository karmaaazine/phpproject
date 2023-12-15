<?php
	$servername = "localhost"; // Change this to your MySQL server hostname if needed
	$username = "root"; // Replace with your MySQL username
	$password = ""; // Replace with your MySQL password
	$dbname = "meal_prep"; // Replace with your MySQL database name
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

?>