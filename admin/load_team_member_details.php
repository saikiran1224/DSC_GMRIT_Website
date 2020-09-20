<!DOCTYPE html>
<?php

require("connect.php");

$con = getConn();

	 if(!$con) {
	 	die();
	 } else {

	 	$sql = "SELECT * from team where member_id='".$_POST['member_ID']."'";
	 	$query = mysqli_query($con, $sql);

	 	$row = mysqli_fetch_array($query);
	 }
 

?>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Modify Team Member Details | DSC GMRIT</title>
    <link rel="icon" href="img/dsc_logo_min.png">


  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

   <script src="https://code.jquery.com/jquery-1.12.4.min.js"
          integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
          crossorigin="anonymous"></script>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

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
        $memberName = test_input($_POST["memberName"]);
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


   function updateMemberDetails() {

         $memberID = $_POST['member_ID'];
         $dbFileName = $_POST['dbFileName'];

        $logoFileName = basename($_FILES["fileToUpload"]["name"]);

        if(!empty($logoFileName)) {
          // User has uploaded a new File
          $fileName = $logoFileName;

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

         } else {
           //User has not uploaded New File
            $fileName = $dbFileName;
         }

    

        if(!empty($fileName)) {

          $sql = "UPDATE team SET member_name ='".$_POST['memberName']."', member_designation='".$_POST['memberDesignation']."',member_dept = '".$_POST['memberDepartment']."',member_interests = '".$_POST['memberInterests']."', member_email = '".$_POST['memberEmailID']."',phone_number = '".$_POST['memberPhoneNumber']."', github_profile = '".$_POST['memberGithub']."', instagram_profile = '".$_POST['memberInstagram']."', linkedlin_profile = '".$_POST['memberLinkedIn']."',member_photo = '$fileName' where member_id = '$memberID' ";

          $query = mysqli_query($GLOBALS['con'], $sql);

          if($query) {
            header('Location: ./manage_team.php');
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

          if(isset($_POST["updateMember"])){
             updateMemberDetails();
             mysqli_close($GLOBALS["con"]);
             $boolean = false;
          }    
      }
   }


}

?>


  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="admin.php">
        <div class="sidebar-brand-icon">
           <img src="img/dsc_logo_min.png" width="30px" height="30px">
        </div>
        <div class="sidebar-brand-text mx-3">DSC GMRIT</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="admin.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

       <!-- Nav Item - Events Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEvents" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-calendar"></i>
          <span>Events</span>
        </a>
        <div id="collapseEvents" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
          
            <a class="collapse-item" href="publish_event">Publish Event</a>
            <a class="collapse-item" href="manage_events">Manage Events</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Participants Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseParticipants" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-user-friends"></i>
          <span>Participants</span>
        </a>
        <div id="collapseParticipants" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Event Wise:</h6>
            <a class="collapse-item" href="view_participants">View Participants</a>
        
          </div>
        </div>
      </li>


      <!-- Nav Item - Ideas Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseIdeas" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-lightbulb"></i>
          <span>Idea Spot</span>
        </a>
        <div id="collapseIdeas" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="view_ideas">View Ideas</a>
          </div>
        </div>
      </li>

       <!-- Nav Item - Team Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTeam" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-users"></i>
          <span>Team</span>
        </a>
        <div id="collapseTeam" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="add_team_member.php">Add Team Member</a>
            <a class="collapse-item" href="manage_team">Manage Team</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - FAQs Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFAQs" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-question-circle"></i>
          <span>FAQs</span>
        </a>
        <div id="collapseFAQs" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="add_faq_question">Add Question</a>
             <a class="collapse-item" href="manage_faq_question">Manage Questions</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>




</ul>
      
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <form class="form-inline">
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
              <i class="fa fa-bars"></i>
            </button>
          </form>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">DSC Lead</span>
                <img class="img-profile rounded-circle" src="img/dsc_logo_min.png">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->


        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800"><?php echo $row['member_name']; ?></h1>

          <hr>

           <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Modify Team Member Details</h6>
                </div>
             <div class="card-body">

         		<form class="user" method="POST" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

         		<input type="hidden" name="member_ID" value="<?php echo $row['member_id']; ?>">

         		<input type="hidden" name="dbFileName" value="<?php echo $row['member_photo']; ?>">

         		<div class="text-center">
         			
         			<img width="200px" height="200px" src="team/<?php echo $row['member_photo']; ?>" class="rounded img-thumbnail" alt="Team Member image" id="selectedImage">
         			<p>&nbsp;</p>
         			<label class="btn btn-primary" >
    					<i class="fas fa-pencil-alt"></i>&nbsp; Modify Profile Picture
    					<input type="file" id="imgInp" name="fileToUpload" hidden>
					</label>&nbsp;&nbsp;
			    </div>


             	<script>

             		function readURL(input) {
					  if (input.files && input.files[0]) {
					    var reader = new FileReader();
					    
					    reader.onload = function(e) {
					      $('#selectedImage').attr('src', e.target.result);
					    }
					    
					    reader.readAsDataURL(input.files[0]); // convert to base64 string
					  }
					}

					$("#imgInp").change(function() {
					  readURL(this);
					});

             	</script>


                <p>&nbsp;</p>
                <div class="form-group">
                  <label for="exampleInputMemberName" class="m-0 font-weight-bold text-primary">Member Name Here</label>
                  <input type="text" class="form-control form-control-user" id="exampleInputMemberName" placeholder="Name of the Member" name="memberName" value="<?php echo $row['member_name']; ?>">
                  <span id="span"><?php echo $memberNameErr; ?></span>
                </div>

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="exampleInputMemberDesignation" class="m-0 font-weight-bold text-primary">Member Designation Here</label>
                    <input type="text" class="form-control form-control-user" id="exampleInputMemberDesignation" placeholder="Designation" name="memberDesignation" value="<?php echo $row['member_designation']; ?>">
                    <span id="span"><?php echo $memberDesignationErr; ?></span>
                  </div>
                  <div class="col-sm-6">
                     <label for="exampleInputDepartment" class="m-0 font-weight-bold text-primary">Member Department Here</label>
                    <input type="text" class="form-control form-control-user" id="exampleInputDepartment" placeholder="Year and Department" name="memberDepartment" value="<?php echo $row['member_dept']; ?>">
                    <span id="span"><?php echo $memberDepartmentErr; ?></span>
                  </div>
                </div>

                <div class="form-group">
                   <label for="exampleInputInterests" class="m-0 font-weight-bold text-primary">Member Interests Here</label>
                  <input type="text" class="form-control form-control-user" id="exampleInputInterests" placeholder="Interests" name="memberInterests" value="<?php echo $row['member_interests']; ?>">
                  <span id="span"><?php echo $memberInterestsErr; ?></span>
                </div>

                <div class="form-group">
                   <label for="exampleInputMail" class="m-0 font-weight-bold text-primary">Member Email ID Here</label>
                  <input type="text" class="form-control form-control-user" id="exampleInputMail" placeholder="Email ID" name="memberEmailID" value="<?php echo $row['member_email']; ?>">
                  <span id="span"><?php echo $memberEmailIDErr; ?></span>
                </div>

                <div class="form-group">
                   <label for="exampleInputPhoneNumber" class="m-0 font-weight-bold text-primary">Member Phone Number Here</label>
                  <input type="text" class="form-control form-control-user" id="exampleInputPhoneNumber" placeholder="Phone Number" name="memberPhoneNumber" value="<?php echo $row['phone_number']; ?>">
                  <span id="span"><?php echo $memberPhoneNumberErr; ?></span>
                </div>

              
                <div class="form-group">
                   <label for="exampleInputGithub" class="m-0 font-weight-bold text-primary">Member GitHub URL Here</label>
                  <input type="text" class="form-control form-control-user" id="exampleInputGithub" placeholder="Github Profile URL" name="memberGithub" value="<?php echo $row['github_profile']; ?>">
                  <span id="span"><?php echo $memberGithubErr; ?></span>
                </div>

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                     <label for="exampleInputInstagram" class="m-0 font-weight-bold text-primary">Member Instagram URL Here</label>
                    <input type="text" class="form-control form-control-user" id="exampleInputInstagram" placeholder="Instagram Profile URL" name="memberInstagram" value="<?php echo $row['instagram_profile']; ?>">
                    <span id="span"><?php echo $memberInstagramErr; ?></span>
                  </div>
                  <div class="col-sm-6">
                     <label for="exampleInputLinkedIn" class="m-0 font-weight-bold text-primary">Member LinkedIn URL Here</label>
                    <input type="text" class="form-control form-control-user" id="exampleInputLinkedIn" placeholder="LinkedIn Profile URL" name="memberLinkedIn" value="<?php echo $row['linkedlin_profile']; ?>">
                    <span id="span"><?php echo $memberLinkedInErr; ?></span>
                  </div>
                </div>


                <!-- <div class="form-group">
                  <input type="file" class="form-control " id="exampleInputFileName" name="fileToUpload">

                </div>
 -->
                <input type="submit" class="btn-primary btn-user btn-block" name="updateMember" value="Update Event Details Event">
              
              </form>

          </div>
      </div>



        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; DSC GMRIT 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="index.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


  <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

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
