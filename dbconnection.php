<?php
$conn = ""; 
try{
$server="us-cdbr-east-02.cleardb.com";
$username="bc5a3a4312365a";
$password="4b85af26";
$dbname = "heroku_a4b1f8fde602596";
$conn = new PDO( 
    "mysql:host=$server; dbname=$dbname", 
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
