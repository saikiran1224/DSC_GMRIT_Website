<?php

require("connect.php");

$con = getConn();

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Publish Event | DSC GMRIT</title>
        <link rel="icon" href="img/dsc_logo_min.png">


  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <style type="text/css">
     
     #id {
      color: red;
     }


  </style>

</head>

<?php

  $eventNameErr = $eventDateErr = $eventTimeErr = $eventOrganizingModeErr = $eventCostErr = $eventDescriptionErr = $eventSpeakerErr = $eventSponsorErr = $eventAssociateErr = "";

 $eventName = $eventDate = $eventTime = $eventOrganizingMode = $eventCost = $eventDescription = $eventSpeaker = $eventSponsor = $eventAssociate = "";

 $boolean = false;

 //Remove spaces, slashes and prevent XSS
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


if ($_SERVER["REQUEST_METHOD"] == "POST" ) {

  //Event Name Validation
  if (empty($_POST["eventName"])) {
    $eventNameErr = "Event Name required";
    $boolean = false;
  } else {
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$eventName)) {
      $eventNameErr = "Only letters and white space allowed";
    }else{
        $eventName = test_input($_POST["eventName"]);
        $boolean = true;
    }
  }

  //Event Date Validation
  if (empty($_POST["eventDate"])) {
    $eventDateErr = "Event Date required";
    $boolean = false;
  } else {
    // check if name only contains letters and whitespace
        $eventDate = test_input($_POST["eventDate"]);
        $boolean = true;
  }

  //Event Time Validation
  if (empty($_POST["eventTime"])) {
    $eventTimeErr = "Event Time required";
    $boolean = false;
  } else {
        $eventTime = test_input($_POST["eventTime"]);
        $boolean = true;
  }

  //Event Organizing Mode Validation
  if (empty($_POST["eventOrganizingMode"])) {
    $eventOrganizingModeErr = "Mode of Organizing required";
    $boolean = false;
  } else {
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$eventOrganizingMode)) {
      $eventOrganizingModeErr = "Only letters and white space allowed";
    }else{
        $eventOrganizingMode = test_input($_POST["eventOrganizingMode"]);
        $boolean = true;
    }
  }


  //Event Cost Validation
  if (empty($_POST["eventCost"])) {
    $eventCostErr = "Event Cost required";
    $boolean = false;
  } else {
    // check if name only contains letters and whitespace
        $eventCost = test_input($_POST["eventCost"]);
        $boolean = true;
  }

  //Event Cost Validation
  if (empty($_POST["eventDescription"])) {
    $eventDescriptionErr = "Event Description required";
    $boolean = false;
  } else {
    // check if name only contains letters and whitespace
        $eventDescription = test_input($_POST["eventDescription"]);
        $boolean = true;
  }

  //Event Cost Validation
  if (empty($_POST["eventSpeaker"])) {
    $eventSpeakerErr = "Event Speaker required";
    $boolean = false;
  } else {
    // check if name only contains letters and whitespace
        $eventSpeaker = test_input($_POST["eventSpeaker"]);
        $boolean = true;
  }

  //Event Cost Validation
  if (empty($_POST["eventSponsor"])) {
    $eventSponsorErr = "Event Sponsor required";
    $boolean = false;
  } else {
    // check if name only contains letters and whitespace
        $eventSponsor = test_input($_POST["eventSponsor"]);
        $boolean = true;
  }

  //Event Cost Validation
  if (empty($_POST["eventAssociate"])) {
    $eventAssociateErr = "Event Associate required";
    $boolean = false;
  } else {
    // check if name only contains letters and whitespace
        $eventAssociate = test_input($_POST["eventAssociate"]);
        $boolean = true;
  }


   function publishEvent() {

        $target_dir = "uploads/";
        $target_file = $target_dir.basename($_FILES['fileToUpload']['name']);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        if ($uploadOk == 0) {
          echo "Sorry, your file was not uploaded.";
          $boolean = false;
          // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
         // echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
            $boolean = true;
            } else {
              //echo "Sorry, there was an error uploading your file.";
              $boolean = true;
            }
        }

        $logoFileName = basename( $_FILES["fileToUpload"]["name"]);

        $eventID = uniqid();

        if(!empty($logoFileName)) {

          $sql = "INSERT into event_details values ('$eventID', '".$_POST['eventName']."', '".$_POST['eventDate']."','".$_POST['eventTime']."','".$_POST['eventOrganizingMode']."', '".$_POST['eventCost']."','".$_POST['eventDescription']."','".$_POST['eventSpeaker']."', '".$_POST['eventSponsor']."', '".$_POST['eventAssociate']."', 'Upcoming','$logoFileName')";

          $query = mysqli_query($GLOBALS['con'], $sql);

          if($query) {
            header('Location: ./admin.php');
            echo "<script>swal('Event Added Successfully !', '','success'); </script>";
          } else {
            echo "<script>swal('Something Error Occurred !', '','warning');</script>";
          }


        }

   }


  if($boolean){
      
      //Check for DB Connection
      if(!$con){
          die("Connection Failed :" + mysqli_connect_error());
      }else{

          if(isset($_POST["eventSubmit"])){
             publishEvent();
             mysqli_close($GLOBALS["con"]);
             $boolean = false;
          }    
      }
   }


}

?>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4"><b>Publish an Event</b></h1>
              </div>
              <form class="user" method="POST" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="exampleInputEventName" placeholder="Name of the Event" name="eventName">
                  <span id="span"><?php echo $eventNameErr; ?></span>
                </div>

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="exampleInputDate" placeholder="Event Date" name="eventDate">
                    <span id="span"><?php echo $eventDateErr; ?></span>
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="exampleInputTime" placeholder="Event Time" name="eventTime">
                    <span id="span"><?php echo $eventTimeErr; ?></span>
                  </div>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="exampleInputOrganizationMode" placeholder="Mode of Organizing" name="eventOrganizingMode">
                  <span id="span"><?php echo $eventOrganizingModeErr; ?></span>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="exampleInputEventCost" placeholder="Event Cost" name="eventCost">
                  <span id="span"><?php echo $eventCostErr; ?></span>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="exampleInputEventDescription" placeholder="Enter Event Description" name="eventDescription">
                  <span id="span"><?php echo $eventDescriptionErr; ?></span>
                </div>

              
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="exampleInputEventSpeaker" placeholder="Enter Speakers for Event" name="eventSpeaker">
                  <span id="span"><?php echo $eventSpeakerErr; ?></span>
                </div>

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="exampleInputEventSponsor" placeholder="Event Sponsor" name="eventSponsor">
                    <span id="span"><?php echo $eventSponsorErr; ?></span>
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="exampleInputEventAssociate" placeholder="Event Associate" name="eventAssociate">
                    <span id="span"><?php echo $eventAssociateErr; ?></span>
                  </div>
                </div>

                <div class="form-group">
                  <input type="file" class="form-control form-control-user" id="exampleInputFileName" name="fileToUpload">

                </div>

                <input type="submit" class="btn-primary btn-user btn-block" name="eventSubmit" value="Publish Event">
              
              </form>
              
              </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
