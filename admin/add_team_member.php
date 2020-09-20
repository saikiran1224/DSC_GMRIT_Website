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

  <title>Add Team Member | DSC GMRIT</title>
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

  $memberNameErr = $memberDesignationErr = $memberDepartmentErr = $memberInterestsErr = $memberEmailIDErr = $memberPhoneNumberErr = $memberGithubErr = $memberLinkedInErr = $memberInstagramErr = "";

 $memberName = $memberDesignation = $memberDepartment = $memberInterests = $memberEmailID = $memberPhoneNumber = $memberGithub = $memberLinkedIn = $memberInstagram = "";

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
  if (empty($_POST["memberName"])) {
    $memberNameErr = "Member Name required";
    $boolean = false;
  } else {
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$memberName)) {
      $memberNameErr = "Only letters and white space allowed";
    }else{
        $memberName = test_input($_POST["eventName"]);
        $boolean = true;
    }
  }

  //Event Date Validation
  if (empty($_POST["memberDesignation"])) {
    $memberDesignationErr = "Designation required";
    $boolean = false;
  } else {
    // check if name only contains letters and whitespace
        $memberDesignation = test_input($_POST["memberDesignation"]);
        $boolean = true;
  }

  //Event Time Validation
  if (empty($_POST["memberDepartment"])) {
    $memberDepartmentErr = "Department required";
    $boolean = false;
  } else {
        $memberDepartment = test_input($_POST["memberDepartment"]);
        $boolean = true;
  }

  //Event Organizing Mode Validation
  if (empty($_POST["memberInterests"])) {
    $memberInterestsErr = "Interests required";
    $boolean = false;
  } else {
    // check if name only contains letters and whitespace
        $memberInterests = test_input($_POST["memberInterests"]);
        $boolean = true;
  }


  //Event Cost Validation
  if (empty($_POST["memberEmailID"])) {
    $memberEmailIDErr = "EmailID required";
    $boolean = false;
  } else {
    // check if name only contains letters and whitespace
        $memberEmailID = test_input($_POST["memberEmailID"]);
        $boolean = true;
  }

  //Event Cost Validation
  if (empty($_POST["memberPhoneNumber"])) {
    $memberPhoneNumberErr = "Phone Number required";
    $boolean = false;
  } else {
    // check if name only contains letters and whitespace
        $memberPhoneNumber = test_input($_POST["memberPhoneNumber"]);
        $boolean = true;
  }

  //Event Cost Validation
  if (empty($_POST["memberGithub"])) {
    $memberGithubErr = "Github URL required";
    $boolean = false;
  } else {
    // check if name only contains letters and whitespace
        $memberGithub = test_input($_POST["memberGithub"]);
        $boolean = true;
  }

  //Event Cost Validation
  if (empty($_POST["memberInstagram"])) {
    $memberInstagramErr = "Instagram URL required";
    $boolean = false;
  } else {
    // check if name only contains letters and whitespace
        $memberInstagram = test_input($_POST["memberInstagram"]);
        $boolean = true;
  }

  //Event Cost Validation
  if (empty($_POST["memberLinkedIn"])) {
    $memberLinkedInErr = "LinkedIn URL required";
    $boolean = false;
  } else {
    // check if name only contains letters and whitespace
        $memberLinkedIn = test_input($_POST["memberLinkedIn"]);
        $boolean = true;
  }


   function addMember() {

        $target_dir = "team/";
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

        $memberID = uniqid();

        if(!empty($logoFileName)) {

          $sql = "INSERT into team values ('$memberID', '".$_POST['memberName']."', '".$_POST['memberDesignation']."','".$_POST['memberDepartment']."','".$_POST['memberInterests']."', '".$_POST['memberEmailID']."','".$_POST['memberPhoneNumber']."','".$_POST['memberGithub']."', '".$_POST['memberInstagram']."', '".$_POST['memberLinkedIn']."','$logoFileName')";

          $query = mysqli_query($GLOBALS['con'], $sql);

          if($query) {
            header('Location: ./admin.php');
            echo "<script>swal('Member Added Successfully !', '','success'); </script>";
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

          if(isset($_POST["addMember"])){
             addMember();
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
                <h1 class="h4 text-gray-900 mb-4"><b>Add Team Member</b></h1>
              </div>
              <form class="user" method="POST" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="exampleInputMemberName" placeholder="Name of the Member" name="memberName">
                  <span id="span"><?php echo $memberNameErr; ?></span>
                </div>

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="exampleInputMemberDesignation" placeholder="Designation" name="memberDesignation">
                    <span id="span"><?php echo $memberDesignationErr; ?></span>
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="exampleInputDepartment" placeholder="Year and Department" name="memberDepartment">
                    <span id="span"><?php echo $memberDepartmentErr; ?></span>
                  </div>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="exampleInputInterests" placeholder="Interests" name="memberInterests">
                  <span id="span"><?php echo $memberInterestsErr; ?></span>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="exampleInputMail" placeholder="Email ID" name="memberEmailID">
                  <span id="span"><?php echo $memberEmailIDErr; ?></span>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="exampleInputPhoneNumber" placeholder="Phone Number" name="memberPhoneNumber">
                  <span id="span"><?php echo $memberPhoneNumberErr; ?></span>
                </div>

              
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="exampleInputGithub" placeholder="Github Profile URL" name="memberGithub">
                  <span id="span"><?php echo $memberGithubErr; ?></span>
                </div>

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="exampleInputInstagram" placeholder="Instagram Profile URL" name="memberInstagram">
                    <span id="span"><?php echo $memberInstagramErr; ?></span>
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="exampleInputLinkedIn" placeholder="LinkedIn Profile URL" name="memberLinkedIn">
                    <span id="span"><?php echo $memberLinkedInErr; ?></span>
                  </div>
                </div>

                <div class="form-group">
                  <input type="file" class="form-control form-control-user" id="exampleInputFileName" name="fileToUpload">

                </div>

                <input type="submit" class="btn-primary btn-user btn-block" name="addMember" value="Add Team Member">
              
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

  <script>
        
        $(document).bind("contextmenu",function(e) {
         e.preventDefault();
        });
        
        $(document).keydown(function(e){
            if(e.which === 123){
               return false;
            }
        });
        </script>

<script>
document.onkeydown = function(e) {
if(event.keyCode == 123) {
return false;
}
if(e.ctrlKey && e.keyCode == 'E'.charCodeAt(0)){
return false;
}
if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)){
return false;
}
if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)){
return false;
}
if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)){
return false;
}
if(e.ctrlKey && e.keyCode == 'S'.charCodeAt(0)){
return false;
}
if(e.ctrlKey && e.keyCode == 'H'.charCodeAt(0)){
return false;
}
if(e.ctrlKey && e.keyCode == 'A'.charCodeAt(0)){
return false;
}
if(e.ctrlKey && e.keyCode == 'F'.charCodeAt(0)){
return false;
}
if(e.ctrlKey && e.keyCode == 'E'.charCodeAt(0)){
return false;
}
}
</script>



</body>

</html>
