<?php
$conn = ""; 
try{
$server="localhost";
$username="root";
$password="";
$dbname = "dsc_gmrit";
$conn = new PDO( 
    "mysql:host=$server; dbname=dsc_gmrit", 
    $username, $password
); 
  
$conn->setAttribute(PDO::ATTR_ERRMODE,  
            PDO::ERRMODE_EXCEPTION); 
            #echo"database is connected";;
  
}
catch(PDOException $e) { 
    echo "Connection failed: " 
        . $e->getMessage(); 
} 
/* Create database  connection with correct username and password/*
$connect=new mysqli($servername,$username,$password,$database);

/* Check the connection is created properly or not */;
     ?>
