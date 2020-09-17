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

  <title>Developer Student Club | GMRIT</title>
    <link rel="icon" href="img/dsc_logo_min.png">


  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">


  <?php 

  $emailErr = $passwordErr = "";
  $email = $password = "";

  $boolean = false;

   //Remove spaces, slashes and prevent XSS
  function test_input($data) {
      $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
  }

  if( $_SERVER["REQUEST_METHOD"] == 'POST') {

    //Email Id Validation
    if (empty($_POST["email"])) {
        $emailErr = "Email required";
        $boolean = false;
    } else {
      // check if e-mail address is well-formed
       if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
         $emailErr = "Invalid email format";
         $boolean = false;
       }else{
          $email = test_input($_POST["email"]);
          $boolean = true;
       }
    }

   //Password Validation
   //$length = strlength($_POST["password"]);
   if(empty($_POST["password"])){
     $passwordErr = "Password required";
     $boolean = false;
   }else {
      $password = test_input($_POST["password"]);
      $boolean = true;
   }

   if($boolean) {

      $admin_email = "dsc.gmrit@gmail.com";
      $admin_pwd = "DSCLEADGmrit@2020";
       
      $email = $_POST["email"];
      $password = $_POST["password"];

      if(!$con){
            die("Connection Failed :" + mysqli_connect_error());
      }else{
        
            if(isset($_POST["login"])){

                if (($admin_email == $email) && ($admin_pwd == $password)) {
                        header("Location: ./admin.php");
                        exit();
                } else {
                   echo "<script>
                     swal('Invalid Credentials !','','warning');
                  </script>";
                }

            }
       } 
         


   }





}


  ?>


  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center align-content-center">

      <div class="col-lg-6">

        <div class="card o-hidden border-0 shadow-lg mt-5">
          
            <!-- Nested Row within Card Body -->
              <div class="card-body">

                
                <img src="img/dsc_logo_1.png" class="m-5 justify-content-center align-content-center" width="80%" height="180px">
              
                <div class="p-0 ml-2 mr-2">
                  
                  <form class="user" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address..." name="email">
                      <span id="span"><?php echo $emailErr; ?></span>

                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password">
                      <span id="span"><?php echo $passwordErr; ?></span>

                    </div>
                    <input class="btn btn-primary btn-block" type="submit" name="login" id="btnsub" value="Login"/>
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
