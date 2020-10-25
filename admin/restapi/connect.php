<?php

	session_start();

	function getConn() {

		$servername = "us-cdbr-east-02.cleardb.com";
		$username = "bc5a3a4312365a";
		$password = "4b85af26";
		$dbname = "heroku_a4b1f8fde602596";

		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		
		    // Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}

		return $conn;

	}


?>

