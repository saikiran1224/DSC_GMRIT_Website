<?php

require("connect.php");

header('Content-type: application/json');

 if($_SERVER["REQUEST_METHOD"] == "POST") {

  $conn = getConn();

  // Takes raw data from the request
  $json = file_get_contents('php://input');

  // Converts it into a PHP object
  $data = json_decode($json);

  $eventID = $data->event_id;
  $participantName = $data->participant_name;
  $participantMail = $data->participant_mail;
  $participantPhone = $data->participant_phone;
  $participantRoll = $data->participant_roll;
  $participantType = $data->participant_type;
  $participantState = $data->participant_state;
  $participantDistrict = $data->participant_district;
  $participantCity = $data->participant_city;
  $participantCollege = $data->participant_college;

  $participantID = uniqid();

  
  $sql = "INSERT into participant_details values ('$participantID', '$eventID','$participantName',
         '$participantCity', '$participantState', '$participantDistrict', '$participantType', 
         '$participantRoll', '$participantCollege', '$participantPhone', '$participantMail')";


    $query = mysqli_query($conn,$sql);


    if($query){
      echo json_encode(["status" => true, "msg" => "Member Registration Successfull"]);
    }else{
      echo json_encode(["status" => false, "msg" => "Member Registration Failed"]);
    }
          
                                                             
 } else {

  echo json_encode(["status" => false, "msg" => "Unauthorized User" ]);
 }


?>