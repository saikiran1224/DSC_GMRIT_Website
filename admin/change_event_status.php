<?php

require("connect.php");

$con = getConn();


    if(!$con){
        die("Connection Failed :" + mysqli_connect_error());
    }


    $query = "UPDATE event_details SET event_status='".$_POST['status']."' where event_id='".$_POST['id']."'";
    $result = mysqli_query($con,$query);

    if($result) {
    	echo "Data Updated";
    }



?>