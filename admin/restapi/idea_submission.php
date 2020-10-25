<?php

require("connect.php");

header('Content-type: application/json');

 if($_SERVER["REQUEST_METHOD"] == "POST") {

  $conn = getConn();

  // Takes raw data from the request
  $json = file_get_contents('php://input');

  // Converts it into a PHP object
  $data = json_decode($json);

  $name = $data->name;
  $mail = $data->email_id;
  $phone = $data->phone;
  $ideaDescription = $data->idea_description;
  $ideaSummarization = $data->idea_summarization;
  $ideaUniqueness = $data->idea_uniqueness;
  $ideaTitle = $data->idea_title;

  $ideaID = uniqid();


  
  $sql = "INSERT into idea_spot values ('$ideaID', '$name','$mail',
         '$phone', '$ideaDescription', '$ideaSummarization', '$ideaUniqueness', 
         '$ideaTitle')";


    $query = mysqli_query($conn,$sql);


    if($query){
      echo json_encode(["status" => true, "msg" => "Idea Submission Successfull"]);
    }else{
      echo json_encode(["status" => false, "msg" => "Idea Submission Failed"]);
    }
          
                                                             
 } else {

  echo json_encode(["status" => false, "msg" => "Unauthorized User" ]);
 }


?>