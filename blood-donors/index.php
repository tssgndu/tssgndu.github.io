<?php
$servername = "localhost";
$username = "id2156308_tssgndu";
$password = "tssgndu";
$dbname = "id2156308_tss";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Website of a technical student society" />
  <meta name="keywords" content="TSS, Technical, GNDU, Society, Guru Nanak Dev University, Computer Science, Tech" />
  
    <title>Donate Blood - Save Lives</title>
     
    <link rel="icon" type="image/png" href="favicon.png">
    <link rel="stylesheet" href="style.css"type="text/css"/>
    <!--For Nav Bar -->
    <link href="../css/style.css" rel="stylesheet">
  <link href="../css/responsive.css" rel="stylesheet">
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <script src="../js/vendor/modernizr-2.6.2.min.js"></script>
  <link href="../css/normalize.css" rel="stylesheet">
    <link href="../css/animate.php" rel="stylesheet">
  <link href="../css/hover.css" rel="stylesheet" >
    <link href="../css/owl.carousel.css" rel="stylesheet">
  <link href="../css/owl.theme.css" rel="stylesheet">
  <link href="../css/owl.transitions.css" rel="stylesheet">
    <link href="../css/preloader.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/colors/default-color.css">
    <link rel="stylesheet" id="switcher-css" type="text/css" href="../css/switcher.css" media="all" />
    <link href="../css/font-awesome.min.css" rel="stylesheet">

</head>
<body>

<div id="loader-wrapper">
  <div id="loader"></div>
  <div class="loader-section section-left"></div>
  <div class="loader-section section-right"></div>
</div>
<nav class="navbar navbar-default navbar-fixed-top" style:"background-color:white;">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button class="navbar-toggle" data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" type="button">
        <span class="sr-only">Toggle navigation</span> 
        <span class="icon-bar"></span> 
        <span class="icon-bar"></span> 
        <span class="icon-bar"></span>
      </button> 
      <a class="navbar-brand" href="index.php">
        <!-- LOGO -->
        <img alt="logo" src="../images/logo.png" style="margin-top: -20px;">
      </a>
        </div><!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-left" style:"color:red">
                <li>
                    <a href="http://tssgndu.com">Home</a>
                </li>
                <li>
                    <a href="http://tssgndu.com#about">about</a>
                </li>
                <li>
                    <a href="http://tssgndu.com#clubs">Clubs</a>
                </li>
        <li>
                    <a href="http://tssgndu.com/events.php">Events</a>
                </li>
        <li>
                    <a href="http://tssgndu.com#team">team</a>
                </li>
                <li>
                    <a href="http://tssgndu.com#contact">contact</a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav><!-- /. nav -->
<section class="work-section work-page">
    <div class="container">
   <div class="container">
   <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="blood-donor.jpg" alt="Register here as a Blood Donor" style="width:100%;">
      </div>
    </div>
  </div>
</div>
   
   
   
   <form action="index.php" method="post" id="donor" style="opacity:1;">
       <fieldset class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="border:0px;margin-left:25%;margin-right:25%">
           <legend><h2>REGISTER AS A DONOR</h2></legend>
          <div id="name">
           <label for="names" id="yourname">Name *</label><br>
           <input type="text"placeholder="  Name" required name="name" id="names">
        </div>
        <div id="cont">
            <label for="contact" id="phone">Phone no. *</label><br>
            <input type="text" id="contac" name="phno" required placeholder="Mobile no.">
        </div>
          <div id="for"><label for="blood">Your Blood Group *</label><br>
              <select  name="group" required id="blood">
                  <option value=""disabled selected hidden class="select">Select</option>
                  <option value="a+"class="select">A+</option>
                  <option value="a-"class="select">A-</option>
                  <option value="b+"class="select">B+</option>
                  <option value="b-"class="select">B-</option>
                  <option value="o+"class="select">O+</option>
                  <option value="o-"class="select">O-</option>
                  <option value="ab+"class="select">AB+</option>
                  <option value="ab-"class="select">AB-</option>                  
              </select>
           </div>
            <div id="ant">
               <label for="radio" id="gen">Gender *</label><br>
               <input type="radio" id="radio" value="male"checked name="gender"><label for="radio" class="gender">Male</label>
               <input type="radio" id="radio" value="female"name="gender"><label for="radio" class="gender">Female</label>
            </div>
           <div id="time">
             <label for="date" id="day">Date of Birth *</label>
              <input type="date" id="date" name="date" required>
           </div>
           <div id="weight">
               <label for="wait" id="wet">Weight(Kg) *</label><br>
               <input type="text" id="wait"placeholder="Weight" required name="weight" >
           </div>
           <div id="reason">
              <label for="donate" id="don">How often you donate blood *</label><br>
              <select name="donate" id="donate" required>
                <option value=""disabled selected hidden id="dot">Select</option>
                <option value="Yet to Donate" id="dot">Yet to donate</option>
                <option value="Regular Donor" id="dot">Regular donor</option>
                <option value="On need Basis" id="dot">On need basis</option>     
              </select>
               
           </div>
        
        <div id="dept">
        <label for="d" id="dep">Department *</label><br>
        <select name="deptt" id="d" required>
            <option value=""disabled selected hidden id="sel">Select</option>
            <option value="History" id="dept">History</option>
            <option value="Political Science" id="dept">Political Sccience</option>
            <option value="Psychology" id="dept">Psychology</option>
            <option value="Social Science" id="dept">Social Science</option>
            <option value="Sociology" id="dept">Sociology</option>
            <option value="Library and Info Science" id="dept">Library and Info Science</option>
            <option value="Commerce" id="dept">Commerce</option>
            <option value="Economics" id="dept">Economics</option>
            <option value="UBS" id="dept">UBS</option>
            <option value="Education" id="dept">Education</option>
            <option value="CS" id="dept">CS</option>
            <option value="CET" id="dept">CET</option>
            <option value="Electronics" id="dept">Electronics</option>
            <option value="Biotechnology" id="dept">Biotechnology</option>
            <option value="Human Genetics" id="dept">Human Genetics</option>
            <option value="Microbiology" id="dept">Microbiology</option>
            <option value="Environmental Sciences" id="dept">Environmental Sciences</option>
            <option value="Biochemistry" id="dept">Biochemistry</option>
            <option value="Pharmaceutical Sciences" id="dept">Pharmaceutical Sciences</option>
            <option value="Zoology" id="dept">Zoology</option>
            <option value="Guru Nanak Studies" id="dept">Guru Nanak Studies</option>
            <option value="English" id="dept">English</option>
            <option value="Foreign Languages" id="dept">Foreign Languages</option>
            <option value="Hindi" id="dept">Hindi</option>
            <option value="Punjabi" id="dept">Punjabi</option>
            <option value="Sanskrit" id="dept">Sanskrit</option>
            <option value="Urdu" id="dept">Urdu</option>
            <option value="Law" id="dept">Law</option>
            <option value="Physical Education" id="dept">Physical Education</option>
            <option value="Architecture" id="dept">Architecture</option>
            <option value="Planning" id="dept">Planning</option>
            <option value="Chemistry" id="dept">Chemistry</option>
            <option value="Food Science and Technology" id="dept">Food Science and Technology</option>
            <option value="Mathematics" id="dept">Mathematics</option>
            <option value="Physics" id="dept">Physics</option>
            <option value="Sports Medicine" id="dept">Sports Medicine</option>
            <option value="Music" id="dept">Music</option>
            <option value="Law" id="dept">Law</option>
            <option value="Law" id="dept">Law</option> 
        </select>
        
        </div>
        
        </fieldset>
        <input type="submit"id="submit" name="submit" value="SUBMIT">
    </form>
   
 <div style='text-align: right;position: fixed;z-index:9999999;bottom: 0; width: 100%;cursor: pointer;line-height: 0;'><a title="Hosted on free web hosting 000webhost.com. Host your own website for FREE." target="_blank" href="https://www.000webhost.com/?utm_source=000webhostapp&utm_campaign=000_logo&utm_medium=website_donatblood&utm_content=footer_img"><img src="https://cloud.githubusercontent.com/assets/23024110/20663010/9968df22-b55e-11e6-941d-edbc894c2b78.png"  alt="www.000webhost.com"></a></div></body>
 <?php
  
   if(isset($_POST['submit']))
   {
    
     $group=$_POST['group'];
     $gender=$_POST['gender'];
     $date=$_POST['date'];
     $weight=$_POST['weight'];
     $donate=$_POST['donate'];
     $name=$_POST['name'];
     $deptt=$_POST['deptt'];
     $phno=$_POST['phno'];
   
     mysqli_query($conn,"INSERT INTO donors_record
     (bloodgroup,gender,dob,weight,reason,name,deptt,phno)
            VALUES
    ('$group','$gender','$date','$weight','$donate','$name','$deptt','$phno')");
        
  if(mysqli_affected_rows($conn) > 0){
  echo "<h2 >Thank You For Registration</h2>";
} else {
  echo "Error Inserting Record<br />";
  echo mysqli_error ($conn);
}
   }   

?>  
</div> </section> 
 
<footer class="footer-section">
  <div class="footer-section-1">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-5 text-left">
          <div class="footer-social-links">
            <ul>
              <li class="hvr-push"><a targer="_blank" href="https://www.facebook.com/tssgndu" class="fa fa-facebook"></a></li>
              <li class="hvr-push"><a targer="_blank" href="https://www.twitter.com/gndutss" class="fa fa-twitter"></a></li>
              <li class="hvr-push"><a targer="_blank" href="https://www.linkedin.com/in/technicalstudentsociety" class="fa fa-linkedin"></a></li>
              <li class="hvr-push"><a targer="_blank" href="https://www.instagram.com/tss_gndu/" class="fa fa-instagram"></a></li>
            </ul>
          </div>
          <!-- End: social-links -->
        </div>
        <!-- col-md-4 -->

        <div class="col-md-4 col-sm-5 text-center">
          <div class="footer-creadit">
            <span class="theme_color">TSS</span> © 2016 All Right Reserved<br>Designed by: <a href="http://tssgndu.com/codewarriors/"><b>CODE WARRIORS</b></a>
          </div>
        </div>
      </div>
      <!-- row -->
    </div>
    <!-- container -->
  </div>  
  <!-- footer-section-1 -->
</footer>


<!-- Scripts -->
<!-- jquery -->
<script src="../js/vendor/jquery-1.12.0.min.js" type="text/javascript" ></script>
<!-- Modernizer -->
<script src="../js/modernizr.custom.php" type="text/javascript"></script>
<!-- plugins -->
<script src="../js/plugins.js"></script>
<!-- Bootstrap -->
<script src="../js/bootstrap.min.js"></script> 
<!-- Use For Animation -->
<script src="../js/wow.min.js"></script>
<!-- Use For Map -->
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
 <!-- Use For Map -->
 <script src="../js/maps.js"></script>
<!-- Use For carousel -->
<script src="../js/owl.carousel.min.js"></script>
<!-- Use For mixitup gallery -->
<script src="../js/jquery.mixitup.min.js"></script>
<!-- Use For Animated Header -->
<script src="../js/animatedheader.js"></script>
<!-- Use For Image Peview -->
 <script src="../js/jquery.prettyPhoto.js"></script>
<!-- Use For single Page Nav -->
<script src="../js/jquery.singlePageNav.min.js"></script>
<!--fswit Switcher   -->
<script src="../js/fswit.js"></script>
<!-- Custom Scripts
========================================-->
<script src="../js/main.js"></script>

</html>