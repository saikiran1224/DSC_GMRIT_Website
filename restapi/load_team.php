<?php

require("connect.php");

header('Content-type: application/json');

 if($_SERVER["REQUEST_METHOD"] == "POST") {

  $conn = getConn();

  // Takes raw data from the request
  $json = file_get_contents('php://input');

  // Converts it into a PHP object
  $data = json_decode($json);

  $dummy = $data->parameter;

  if($dummy == 'core team') {

    $sql = "SELECT * FROM team";


    $result = mysqli_query($conn,$sql);
          
    if(! $result ) {
      die('Could not get data: ' . mysqli_error());
    }

    //$row = mysqli_fetch_array($result, MYSQLI_ASSOC);


    if (mysqli_num_rows($result) > 0) {
         
        $members_array = array();
        
      while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

            $response = array();
            $response['member_id'] = $row['member_id'];
            $response['member_name'] = $row['member_name'];
            $response['member_designation'] = $row['member_designation'];
            $response['member_department'] = $row['member_department'];
            $response['member_interests'] = $row['member_interests'];
            $response['member_email'] = $row['member_email'];
            $response['phone_number'] = $row['phone_number'];
            $response['github_profile'] = $row['github_profile'];
            $response['instagram_profile'] = $row['instagram_profile'];
            $response['linkedin_profile'] = $row['linkedin_profile'];
            $response['member_photo'] = $row['member_photo'];
            array_push($members_array, $response);
         }
    
      echo json_encode(["status" => true, "data" => $members_array]); 

      } else {
      echo json_encode(["status" => false, "msg" => "No Members Found"]);
      }

  }else{
    echo json_encode(["status" => false, "msg" => "Unauthorized User" ]);
  }
                                                             
 } else {

  echo json_encode(["status" => false, "msg" => "Unauthorized User" ]);
 }


?>