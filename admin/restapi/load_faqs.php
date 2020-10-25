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

  if($dummy == 'FAQs') {

    $sql = "SELECT * FROM faq";


    $result = mysqli_query($conn,$sql);
          
    if(! $result ) {
      die('Could not get data: ' . mysqli_error());
    }

    //$row = mysqli_fetch_array($result, MYSQLI_ASSOC);


    if (mysqli_num_rows($result) > 0) {
         
        $faqs_array = array();
        
      while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

            $response = array();
            $response['faq_id'] = $row['faq_id'];
            $response['question'] = $row['question'];
            $response['answer'] = $row['answer'];
            $response['date'] = substr($row['publish_date'],0, 10);
            array_push($faqs_array, $response);
         }
    
      echo json_encode(["status" => true, "data" => $faqs_array]); 

      } else {
      echo json_encode(["status" => false, "msg" => "No FAQs Found"]);
      }

  } else{
      echo json_encode(["status" => false, "msg" => "Unauthorized User" ]);    
  }
                                                             
 } else {

  echo json_encode(["status" => false, "msg" => "Unauthorized User" ]);
 }


?>