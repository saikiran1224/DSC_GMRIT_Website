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

  <title>Add FAQ Question | DSC GMRIT</title>
  <link rel="icon" href="img/dsc_logo_min.png">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

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
          
            <a class="collapse-item" href="publish_event.php">Publish Event</a>
            <a class="collapse-item" href="manage_events.php">Manage Events</a>
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
            <a class="collapse-item" href="view_participants.php">View Participants</a>
        
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
            <a class="collapse-item" href="view_ideas.php">View Ideas</a>
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
            <a class="collapse-item" href="manage_team.php">Manage Team</a>
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
            <a class="collapse-item" href="add_faq_question.php">Add Question</a>
             <a class="collapse-item" href="manage_faq_question.php">Manage Questions</a>
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
          <h1 class="h3 mb-2 text-gray-800">Add Frequently Asked Question(FAQ)</h1>
          <hr>


<?php 

$QuestionErr = $AnswerErr = "";

$Question = $Answer = "";

$boolean = false;

//Remove spaces, slashes and prevent XSS
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST" ) {

   //Question Validation
  if (empty($_POST["Question"])) {
    $QuestionErr = "Question is required";
    $boolean = false;
  } else {
    // check if name only contains letters and whitespace
        $Question = test_input($_POST["Question"]);
        $boolean = true;
  }

  //Answer Validation
  if (empty($_POST["Answer"])) {
    $AnswerErr = "Answer is required";
    $boolean = false;
  } else {
    // check if name only contains letters and whitespace
        $Answer = test_input($_POST["Answer"]);
        $boolean = true;
  }


  function addQuestion() {

    $questionID = uniqid();

     date_default_timezone_set('Asia/Calcutta');
    $date = date('Y-m-d H:i:s');
               

    $sql = "INSERT into faq values('$questionID', '".$_POST['Question']."', '".$_POST['Answer']."','$date')";

    $query = mysqli_query($GLOBALS['con'], $sql);

    if($query) {
      
      echo "<script>swal('FAQ Added Successfully !', '','success'); </script>";
    } else {
      echo "<script>swal('Something Error Occurred !', '','warning');</script>";
    }
  }

  if($boolean){
      
      //Check for DB Connection
      if(!$con){
          die("Connection Failed :" + mysqli_connect_error());
      }else{

          if(isset($_POST["addQuestion"])){
             addQuestion();
             mysqli_close($GLOBALS["con"]);
             $boolean = false;
          }    
      }
   }






}


?>

           <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Enter Question and Answer</h6>
                </div>
                <div class="card-body">

                    <form method="POST" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="exampleInputOrganizationMode" placeholder="Enter Question" name="Question">
                      <span id="span"><?php echo $QuestionErr; ?></span>

                    </div>

                    <div class="form-group">
                        <textarea class="form-control" rows="10" id="answer" placeholder="Enter Answer" name="Answer"></textarea>
                      <span id="span"><?php echo $AnswerErr; ?></span>

                    </div>

                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="submit" class="btn btn-primary btn-user btn-block" name="addQuestion" value="Add Question">
                        <!--  <a href="#" class="btn btn-primary btn-user btn-block">
                          Add Question
                        </a> -->
                    </div>
                      <div class="col-sm-6">
                          <input type="reset" class="btn btn-primary btn-user btn-block" name="resetForm" value="Reset Form">
                       
                      </div>
                   </div>

                    </form>


                </div>
              </div>

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
