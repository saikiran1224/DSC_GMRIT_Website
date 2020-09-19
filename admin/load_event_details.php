<?php

require("connect.php");

$con = getConn();

 if(!empty($_POST['event_id'])) {

	 if(!$con) {
	 	die();
	 } else {

	 	$sql = "SELECT * from event_details where event_id='".$_POST['event_id']."'";
	 	$query = mysqli_query($con, $sql);

	 	$row = mysqli_fetch_array($query);
	 }
 } else {
 	header('Location: ./404.html');
 	exit();
 } 

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Modify Event Details | DSC GMRIT</title>
    <link rel="icon" href="img/dsc_logo_min.png">


  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

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

        <?php 

        $eventNameErr = $eventDateErr = $eventTimeErr = $eventOrganizingModeErr = $eventCostErr = $eventDescriptionErr = $eventSpeakerErr = $eventSponsorErr = $eventAssociateErr = "";

 		$eventName = $eventDate = $eventTime = $eventOrganizingMode = $eventCost = $eventDescription = $eventSpeaker = $eventSponsor = $eventAssociate = "";

 		$boolean = false;




        ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800"><?php echo $row['event_name']; ?></h1>

          <hr>

           <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Modify Event Details</h6>
                </div>
             <div class="card-body">

         		<form class="user" method="POST" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

         		<div class="text-center">
         			
         			<img width="500px" height="300px" src="uploads/<?php echo $row['event_logo']; ?>" class="rounded img-thumbnail" alt="Responsive image">
         			<p>&nbsp;</p>
         			<label class="btn btn-primary">
    					<i class="fas fa-pencil-alt"></i>&nbsp; Modify Event Poster<input type="file" hidden>
					</label>&nbsp;&nbsp;
					<label class="btn btn-danger">
    					<i class="fas fa-times-circle"></i>&nbsp; Remove Event Poster<input type="file" hidden>
					</label>
         		</div>

                <p>&nbsp;</p>
                <div class="form-group">
                  <label for="exampleInputEventName" class="m-0 font-weight-bold text-primary">Event Name Here</label>
                  <input type="text" class="form-control" id="exampleInputEventName" placeholder="Name of the Event" name="eventName" value="<?php echo $row['event_name']; ?>">
                  <span id="span"><?php echo $eventNameErr; ?></span>
                </div>

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                  	<label for="exampleInputDate" class="m-0 font-weight-bold text-primary">Event Date Here</label>
                    <input type="text" class="form-control" id="exampleInputDate" placeholder="Event Date" name="eventDate" value="<?php echo $row['date']; ?>">
                    <span id="span"><?php echo $eventDateErr; ?></span>
                  </div>
                  <div class="col-sm-6">
                  	<label for="exampleInputTime" class="m-0 font-weight-bold text-primary">Event Time Here</label>
                    <input type="text" class="form-control " id="exampleInputTime" placeholder="Event Time" name="eventTime" value="<?php echo $row['time']; ?>">
                    <span id="span"><?php echo $eventTimeErr; ?></span>
                  </div>
                </div>

                <div class="form-group">
                	<label for="exampleInputOrganizationMode" class="m-0 font-weight-bold text-primary">Event Organizing Mode Here</label>
                  <input type="text" class="form-control " id="exampleInputOrganizationMode" placeholder="Mode of Organizing" name="eventOrganizingMode" value="<?php echo $row['organizing_mode']; ?>">
                  <span id="span"><?php echo $eventOrganizingModeErr; ?></span>
                </div>

                <div class="form-group">
                	<label for="exampleInputEventCost" class="m-0 font-weight-bold text-primary">Event Cost Here</label>
                  <input type="text" class="form-control " id="exampleInputEventCost" placeholder="Event Cost" name="eventCost" value="<?php echo $row['event_cost']; ?>">
                  <span id="span"><?php echo $eventCostErr; ?></span>
                </div>

                <div class="form-group">
                	<label for="exampleInputEventDescription" class="m-0 font-weight-bold text-primary">Event Description Here</label>
                  <input type="text" class="form-control " id="exampleInputEventDescription" placeholder="Enter Event Description" name="eventDescription" value="<?php echo $row['event_description']; ?>">
                  <span id="span"><?php echo $eventDescriptionErr; ?></span>
                </div>

              
                <div class="form-group">
                	<label for="exampleInputEventSpeaker" class="m-0 font-weight-bold text-primary">Event Speaker Here</label>
                  <input type="text" class="form-control " id="exampleInputEventSpeaker" placeholder="Enter Speakers for Event" name="eventSpeaker" value="<?php echo $row['event_speaker']; ?>">
                  <span id="span"><?php echo $eventSpeakerErr; ?></span>
                </div>

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                  	<label for="exampleInputEventSponsor" class="m-0 font-weight-bold text-primary">Event Sponsor Here</label>
                    <input type="text" class="form-control " id="exampleInputEventSponsor" placeholder="Event Sponsor" name="eventSponsor" value="<?php echo $row['event_sponsor']; ?>">
                    <span id="span"><?php echo $eventSponsorErr; ?></span>
                  </div>
                  <div class="col-sm-6">
                  	<label for="exampleInputEventAssociate" class="m-0 font-weight-bold text-primary">Event Associate Here</label>
                    <input type="text" class="form-control " id="exampleInputEventAssociate" placeholder="Event Associate" name="eventAssociate" value="<?php echo $row['event_associate']; ?>">
                    <span id="span"><?php echo $eventAssociateErr; ?></span>
                  </div>
                </div>

                <!-- <div class="form-group">
                  <input type="file" class="form-control " id="exampleInputFileName" name="fileToUpload">

                </div>
 -->
                <input type="submit" class="btn-primary btn-user btn-block" name="eventSubmit" value="Publish Event">
              
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
