<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content=" ">
    <meta name="author" content="">

    <!-- Website Title -->
    <title>DSC-GMRIT</title>
    
    <!-- Styles -->
    <!--<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600,700,700i&amp;subset=latin-ext" rel="stylesheet">-->
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300&display=swap" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet">
    
    <link href="css/styles.css" rel="stylesheet">
    <!-- Favicon  -->
    <link rel="icon" href="images/log.png">

      <style>
        @font-face {
  font-family:ggl;
  src: url(googlefont.ttf);

}
.nav-link{
    color:black;
}

    </style>
     <script src="js/cities.js"></script>
</head>
    <body data-spy="scroll" data-target=".fixed-top">
    
    <!-- Preloader -->
    <div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        

        <!-- Image Logo -->
        <a class="navbar-brand logo-image" href=""><img src="images/newdsc.png" alt="alternative" style="width:70px"></a>
        <h5 class="text" style="color:black;" >&nbsp;Developer Student Clubs - GMRIT</h5>
        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="index.php" style="color:black">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="index.php" style="color:black">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="index.php" style="color:black">Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="index.php" style="color:black">Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="index.php" style="color:black">Ideaspot</a>
                </li>
 <li class="nav-item">
                    <a class="nav-link page-scroll" href="index.php" style="color:black">Community</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="index.php" style="color:black">Contact us</a>
                </li>
                
            </ul>
            <span class="nav-item social-icons">
                <span class="fa-stack">
                    <a href="https://www.linkedin.com/company/developer-student-clubs-gmrit/?viewAsMember=true">
                      <i class="fas fa-circle fa-stack-2x fa-linkedin-in"></i>
                        <i class="fab fa-linkedin-in fa-stack-2x"></i>
                    </a>
                </span>

                <span class="fa-stack">
                    <a href="https://www.instagram.com/dsc_gmrit/">
                        <i class="fas fa-circle fa-stack-2x fa-instagram"></i>
                        <i class="fab fa-instagram fa-stack-2x"></i>
                    </a>
                </span>
            </span>
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->
    <div id="contact" class="form-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2  class="turquoise">Register your seat !</h2>
                    <ul class="list-unstyled li-space-lg">
                        <li class="address">Fill the form given below </li>
<!--                         <li><i class="fas fa-envelope"></i><a class="turquoise" href="">dsc.gmrit@gmail.com</a></li>
 -->                    </ul>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="images/contact.png" alt="alternative">
                    </div> 
                </div> <!-- end of col -->
                <div class="col-lg-6">
                <?php
                                $a=$_POST['event_name'];
                                
                                
                                ?> 
                                     
                    <!-- Contact Form -->
                    <form  data-toggle="validator" data-focus="false" method="POST"  action="event_registration.php">
<!--                         <div class="form-group">
                            <input type="text" class="form-control-input" id="cname" required>
                            <label class="label-control" for="cname">Event Id</label>
                            <div class="help-block with-errors"></div>
                        </div>
 -->                            <input type="text" name='event_id' value="<?=$a?>" hidden>       
                        <div class="form-group">
                            <input type="text" class="form-control-input" id="cname" name="name" required>
                            <label class="label-control" for="cname">Enter Name of Student</label>
                            <div class="help-block with-errors"></div>
                        </div>
                            <div class="form-group">
                            <input type="email" class="form-control-input" id="cname" name="emailID" required>
                            <label class="label-control" for="cname">Email Id</label>
                            <div class="help-block with-errors"></div>
                        </div>
                         <div class="form-group">
                            <input type="text" class="form-control-input" id="cname" name="phone_number" required>
                            <label class="label-control" for="cname">Phone Number</label>
                            <div class="help-block with-errors"></div>
                        </div>
                         <div class="form-group">
                            <input type="text" class="form-control-input" id="cname" name="jntuno" required>
                            <label class="label-control" for="cname">Identity Number</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="dropdown">
                            <select name="member_type" class="newform form-control-input">
                                <option value="" disabled selected>Choose Graduate or Undergarduate</option>
                                <option value="Graduate">Graduate</option>
                                <option value="Undergarduate">Undergarduate</option>
                            </select>
                            
                        </div>
                        <br>

<div class="dropdown">
<select onchange="print_city('state', this.selectedIndex);" id="sts" name ="state"   class="newform form-control-input" required></select>

<div class="help-block with-errors"></div>
</div>
<br>
<div class="dropdown">
<select id ="state"  class="newform form-control-input" name="district" required >
    <option>Select District</option>
</select>
<script language="javascript">print_state("sts");</script>
<div class="help-block with-errors"></div>
</div>         
<br>             
<div class="form-group">
    <input type="text" class="form-control-input" id="cname" name="city" required>
    <label class="label-control" for="cname">Enter city name</label>
    <div class="help-block with-errors"></div>
</div>
<div class="form-group">
    <input type="text" class="form-control-input" id="cname" name="company" required>
    <label class="label-control" for="cname">College Name</label>
    <div class="help-block with-errors"></div>
</div>

<div class="form-group">
                       <button type="submit" class="btn btn-primary" href="submission.html" style="margin:auto">Register Now</button>
                        </div>
                        <div class="form-message">
                            <div id="cmsgSubmit" class="h3 text-center hidden"></div>
                        </div>
                    </form>
                    <!-- end of contact form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-2 -->
    <!-- end of contact -->

    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-col">
                        <h4>Explore</h4>
                        <a href="http://www.gmrit.org/">GMR INSTITUTE OF TECHNOLOGY</a><br>
                        <a href="#aboutus">About us</a> <br>
                        <a href="#about">Meet the team</a>
                    </div>
                </div> <!-- end of col -->
                <div class="col-md-4">
                    <div class="footer-col middle">
                        <h4>Write us at</h4>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Email : <br>dsc.gmrit@gmail.com</div>
                            </li>
                           <!--  <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body"></div>
                            </li> -->
                        </ul>
                    </div>
                </div> <!-- end of col -->
                <div class="col-md-4">
                    <div class="footer-col last">
                        <h4>Social Media</h4>
                        <!-- <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span> -->
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-linkedin-in fa-stack-1x"></i>
                            </a>
                        </span>
                    </div> 
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->  
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © 2020 <a href=""> designed by dscgmrit</a></p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->
  
        
    <!-- Scripts -->
    <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->
   

</body>
</html>