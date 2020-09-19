<?php

	session_start();

	function getConn() {

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "dsc_gmrit";

		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		
		    // Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}

		return $conn;

	}


?>

