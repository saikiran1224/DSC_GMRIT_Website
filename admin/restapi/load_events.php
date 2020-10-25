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

  if($dummy == 'events') {

    $sql = "SELECT * FROM event_details";


    $result = mysqli_query($conn,$sql);
          
    if(! $result ) {
      die('Could not get data: ' . mysqli_error());
    }

    //$row = mysqli_fetch_array($result, MYSQLI_ASSOC);


    if (mysqli_num_rows($result) > 0) {
         
        $events_array = array();
        
      while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

            $response = array();
            $response['event_id'] = $row['event_id'];
            $response['event_name'] = $row['event_name'];
            $response['event_img_url'] = "https://dscgmrit.herokuapp.com/admin/uploads/".$row['event_logo'];
            $response['date'] = $row['date'];
            $response['time'] = $row['time'];
            $response['organizing_mode'] = $row['organizing_mode'];
            $response['event_cost'] = $row['event_cost'];
            $response['event_description'] = $row['event_description'];
            $response['event_speaker'] = $row['event_speaker'];
            $response['event_sponsor'] = $row['event_sponsor'];
            $response['event_associate'] = $row['event_associate'];
            $response['event_status'] = $row['event_status'];
            $response['event_logo'] = $row['event_logo'];
            array_push($events_array, $response);
         }
    
      echo json_encode(["status" => true, "data" => $events_array]); 

      } else {
      echo json_encode(["status" => false, "msg" => "No Events Found"]);
      }

  } else{
      echo json_encode(["status" => false, "msg" => "Unauthorized User" ]);    
  }
                                                             
 } else {

  echo json_encode(["status" => false, "msg" => "Unauthorized User" ]);
 }


?>