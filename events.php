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
    <title>TSS - Technical Student Society	</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Website of a technical student society" />
	<meta name="keywords" content="TSS, Technical, GNDU, Society, Guru Nanak Dev University, Computer Science, Tech" />
	
	<!-- Favicons -->
	<link rel="icon" type="image/png" href="images/favicon.png">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
	
	
    <!-- CSS Begins
    ================================================== -->
	<!-- Google Font And Custom Font Begins -->
	<link href='https://fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Josefin+Sans:400,700,600' rel='stylesheet' type='text/css'>

	<!-- FONT ICONS -->
	<!-- font-awesome -->
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<!-- IonIcons -->
	<link href="icon/ionicons/css/ionicons.css" rel="stylesheet">
	<!-- Elegant Icons -->
	<link href="icon/elegant-icons/style.css" rel="stylesheet">
    <!--/ FONT ICONS -->

	<!--Animate Effect-->
	<link href="css/animate.php" rel="stylesheet">
 	<link href="css/hover.css" rel="stylesheet" >
	
	<!--prettyPhoto for Image Preview-->
	<link href="css/prettyPhoto.css" rel="stylesheet"> 

	<!--Owl Carousel -->
	<link href="css/owl.carousel.css" rel="stylesheet">
	<link href="css/owl.theme.css" rel="stylesheet">
	<link href="css/owl.transitions.css" rel="stylesheet">

	
	<!--BootStrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>
	<link href="css/normalize.css" rel="stylesheet">
	
	<!--Preloader -->
	<link href="css/preloader.css" rel="stylesheet">

	<!-- Main Style -->
	<link href="css/style.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	
	<!--Replace Your Color-->
	<link rel="stylesheet" href="css/colors/default-color.css">
	<!--Replace Your Color Ends-->

	<!-- Switcher Styles-->
	<link rel="stylesheet" id="switcher-css" type="text/css" href="css/switcher.css" media="all" />
	<!-- END Switcher Styles -->

	<!-- Template Color Demo Examples -->
	<link rel="alternate stylesheet" type="text/css" href="css/colors/rosybrown.css" title="alternate" media="all" /><!--rosybrown Color-->	
	<link rel="alternate stylesheet" type="text/css" href="css/colors/green.css" title="next" media="all" /><!--Green Color-->	
	<link rel="alternate stylesheet" type="text/css" href="css/colors/hazelwood.css" title="bookmark" media="all" /><!--hazelwood Color-->	
	<link rel="alternate stylesheet" type="text/css" href="css/colors/gray.css" title="prefetch" media="all" /><!--gray Color-->	
	<!-- END Template Color Demo Examples -->

	<!--magnific pop up-->
	<link rel="stylesheet" href="css/magnific-popup/magnific-popup.css">
	<!--magnific pop up ends-->
</head>
<body>

<!-- Start: Preloader section
=============================================--> 
<div id="loader-wrapper">
	<div id="loader"></div>
	<div class="loader-section section-left"></div>
	<div class="loader-section section-right"></div>
</div>
<!-- End: Preloader section
=============================================--> 

<!-- Start: Header Section
=============================================-->   
<!-- nav -->
<nav class="navbar navbar-default navbar-fixed-top">
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
				<img alt="logo" src="images/logo.png" style="margin-top: -20px;">
			</a>
        </div><!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-left">
                <li>
                    <a href="index.php#home">Home</a>
                </li>
                <li>
                    <a href="index.php#about">about</a>
                </li>
                <li>
                    <a href="index.php#clubs">Clubs</a>
                </li>
				<li>
                    <a href="#events">Events</a>
                </li>
				<li>
                    <a href="index.php#team">team</a>
                </li>
                <li>
                    <a href="index.php#contact">contact</a>
                </li>
            </ul>
			<div class="pull-right header-right text-right">
                <ul>
					<li>
						<a class="visible-lg" targer="_blank" href="https://www.facebook.com/tssgndu"><i class="fa fa-facebook"></i></a>
					</li>
					<li>
						<a class="visible-lg" targer="_blank" href="https://www.twitter.com/gndutss"><i class="fa fa-twitter"></i></a>
					</li>
					<li>
						<a class="visible-lg" targer="_blank" href="https://www.linkedin.com/in/technicalstudentsociety"><i class="fa fa-linkedin"></i></a>
					</li>
					<li>
						<a class="visible-lg" targer="_blank" href="https://www.instagram.com/tss_gndu/"><i class="fa fa-instagram"></i></a>
					</li>
				</ul>
            </div>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav><!-- /. nav -->
<!-- header -->
<header class="blog-banner">
    <!-- Start: Header Content -->
	<div class="container" id="events">
		
			<div data-wow-delay="0.1s" data-wow-duration="1s" class="strokeme tp-caption big-title rs-title customin customout bg-sld-cp-primary wow fadeInDownBig" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInDownBig;">
					<!-- <span style="-webkit-text-stroke-color: #2EADAB ;-webkit-text-stroke-width: 0.5px;"> -->
					<span class="title-builder"> O</span>ur</u><span class="title-builder"> E</span>vents
					</div>
		
		<!-- End: .row -->
	</div> 
	<!-- End: Header Content -->
</header><!--/. header -->
<!-- End: Header Section
==================================================--> 




<!-- Start:Our Work Section 
==================================================-->  
<section class="work-section work-page">
    <div class="container">
        <div class="row">
			<div class="col-lg-12">
                <!-- Project Filter-->
                <div class="project-filter">
                    <ul class="project_menu">
                        <li class="filter hvr-underline-from-center" data-filter="all"><i class="fa fa-database"></i> All Events</li>
                        <li class="filter hvr-underline-from-center" data-filter=".category-2"><i class="fa fa-file-code-o"></i> Technical Events</li>
                        <li class="filter hvr-underline-from-center" data-filter=".category-1"><i class="fa fa-file-image-o"></i> Non-Technical Events</li>
                        <li class="filter hvr-underline-from-center" data-filter=".category-3"><i class="fa fa-file-text-o"></i> Seminars & Flash Classes</li>
                        <li class="filter hvr-underline-from-center" data-filter=".category-4"><i class="fa fa-file-video-o"></i> Tech Fests</li>
                    </ul>
                </div>
				<!-- Project Filter End-->
            </div>
        </div>
        		
	    <div class="row">
			<!-- col-lg-12 col-sm-6 -->
            <div class="col-lg-12 col-sm-12">			
				                <div class="project-list ">

				<?php
	
			$sql = "SELECT * FROM events_record order by year DESC, year+newindex DESC, day DESC";
	$result = $conn->query($sql);

if ($result->num_rows >0) {
	// output data of each row
	   
      
    while($row = $result->fetch_assoc()) {
					$newflag1=$row["techflag"];
					$newflag2=$row["nontechflag"];
					$newflag3=$row["semflag"];
					$newflag4=$row["techfestflag"];
			
					if($newflag1=='category-1')
					{?>
	
                	<div class="col-sm-5 col-lg-3 col-md-4 col-xs-8 mix category-2" >
						<div class="work-item">
							<div class="items"><img alt="" class="" 
								src="<?php echo $row["image"];?>"/></div>
								<div class="mask2">
								<a><h4><?php echo $row["name"];?></h4></a>
								<a class="info"><p><?php echo $row["day"];?>  <?php echo $row["month"];?> ,  <?php echo $row["year"];?></p></a>
							</div>	
						</div>
					</div>	
					
					<?php
					}
					elseif($newflag2=='category-2')
					{?>
	
                	<div class="col-sm-5 col-lg-3 col-md-4 col-xs-8 mix category-1" >
						<div class="work-item">
							<div class="items"><img alt="" class="" 
								src="<?php echo $row["image"];?>"/></div>
								<div class="mask2">
								<a><h4><?php echo $row["name"];?></h4></a>
								<a class="info"><p><?php echo $row["day"];?>  <?php echo $row["month"];?> ,  <?php echo $row["year"];?></p></a>
							</div>	
						</div>
					</div>	
					
					<?php
					} 
					elseif($newflag3=='category-3')
					{?>
	
                	<div class="col-sm-5 col-lg-3 col-md-4 col-xs-8 mix category-3" >
						<div class="work-item">
							<div class="items"><img alt="" class="" 
								src="<?php echo $row["image"];?>"/></div>
								<div class="mask2">
								<a><h4><?php echo $row["name"];?></h4></a>
								<a class="info"><p><?php echo $row["day"];?>  <?php echo $row["month"];?> ,  <?php echo $row["year"];?></p></a>
							</div>	
						</div>
					</div>	
					
					<?php
					} 
					elseif($newflag4=='category-4')
					{?>
	
                	<div class="col-sm-5 col-lg-3 col-md-4 col-xs-8 mix category-4" >
						<div class="work-item">
							<div class="items"><img alt="" class="" 
								src="<?php echo $row["image"];?>"/></div>
								<div class="mask2">
								<a><h4><?php echo $row["name"];?></h4></a>
								<a class="info"><p><?php echo $row["day"];?>  <?php echo $row["month"];?> ,  <?php echo $row["year"];?></p></a>
							</div>	
						</div>
					</div>	
					
					<?php
					}
	
			}
		}	
	?>

					<!--/ End: Work Item 8 -->
				</div><!--/project-list --> 
            </div>
			<!--/.col-lg-12 col-sm-6-->
        </div>
		<!--/.row-->
<div class="row">
			<!-- col-lg-12 col-sm-6 -->
            <div class="col-lg-12 col-sm-12">
                <div class="project-list">
                	<div class="col-lg-3 col-sm-3 col-xs-12 mix category-2" data-myorder="1">
						<div class="work-item">
							<div class="items"><img alt="" class="" src="images/work/work-46.jpg"></div>
							<div class="mask2">
								<a><h4>FARRAGO C</h4></a>
								<a class="info"><p>January 25, 2017</p></a>
							</div>	
						</div>
					</div>
                	<div class="col-lg-3 col-sm-3 col-xs-12 mix category-2" data-myorder="1">
						<div class="work-item">
							<div class="items"><img alt="" class="" src="images/work/work-45.jpg"></div>
							<div class="mask2">
								<a><h4>CODE WAR - II</h4></a>
								<a class="info"><p>December 24, 2016</p></a>
							</div>	
						</div>
					</div>
                	<div class="col-lg-3 col-sm-3 col-xs-12 mix category-1" data-myorder="1">
						<div class="work-item">
							<div class="items"><img alt="" class="" src="images/work/work-44.jpg"></div>
							<div class="mask2">
								<a><h4>Literati 2k16</h4></a>
								<a class="info"><p>November 03, 2016</p></a>
							</div>	
						</div>
					</div>
					<div class="col-lg-3 col-sm-3 col-xs-12 mix category-3" data-myorder="1">
						<div class="work-item">
							<div class="items"><img alt="" class="" src="images/work/work-43.jpg"></div>
							<div class="mask2">
								<a><h4>Seminar on data analytics (valuerhr)</h4></a>
								<a class="info"><p>October 26, 2016</p></a>
							</div>	
						</div>
					</div>
                	<div class="col-lg-3 col-sm-3 col-xs-12 mix category-3" data-myorder="1">
						<div class="work-item">
							<div class="items"><img alt="" class="" src="images/work/work-42.jpg"></div>
							<div class="mask2">
								<a><h4>FLASH CLASSES on C</h4></a>
								<a class="info"><p>September, 2016 - November, 2016</p></a>
							</div>	
						</div>
					</div>
                	<div class="col-lg-3 col-sm-3 col-xs-12 mix category-3" data-myorder="1">
						<div class="work-item">
							<div class="items"><img alt="" class="" src="images/work/work-41.jpg"></div>
							<div class="mask2">
								<a><h4>Seminar on CYBER SECURITY</h4></a>
								<a class="info"><p>September 28, 2016</p></a>
							</div>	
						</div>
					</div>
					<div class="col-lg-3 col-sm-3 col-xs-12 mix category-2" data-myorder="1">
						<div class="work-item">
							<div class="items"><img alt="" class="" src="images/work/work-40.jpg"></div>
							<div class="mask2">
								<a><h4>CODE WAR - I</h4></a>
								<a class="info"><p>September 24, 2016</p></a>
							</div>	
						</div>
					</div>
					<div class="col-lg-3 col-sm-3 col-xs-12 mix category-1" data-myorder="1">
						<div class="work-item">
							<div class="items"><img alt="" class="" src="images/work/work-39.jpg"></div>
							<div class="mask2">
								<a><h4>RUN 4 FUN</h4></a>
								<a class="info"><p>September 21, 2016</p></a>
							</div>	
						</div>
					</div>
					<div class="col-lg-3 col-sm-3 col-xs-12 mix category-3" data-myorder="1">
						<div class="work-item">
							<div class="items"><img alt="" class="" src="images/work/work-38.jpg"></div>
							<div class="mask2">
								<a><h4>INTRODUCTORY Seminar for First Year Students</h4></a>
								<a class="info"><p>September 20, 2016</p></a>
							</div>	
						</div>
					</div>
					<div class="col-lg-3 col-sm-3 col-xs-12 mix category-3" data-myorder="1">
						<div class="work-item">
							<div class="items"><img alt="" class="" src="images/work/work-37.jpg"></div>
							<div class="mask2">
								<a><h4>Seminar by GATE LEADERS</h4></a>
								<a class="info"><p>September 20, 2016</p></a>
							</div>	
						</div>
					</div>
                	<div class="col-lg-3 col-sm-3 col-xs-12 mix category-3" data-myorder="1">
						<div class="work-item">
							<div class="items"><img alt="" class="" src="images/work/work-36.jpg"></div>
							<div class="mask2">
								<a><h4>Seminar on CAMPUS PLACEMENTS</h4></a>
								<a class="info"><p>August 24, 2016</p></a>
							</div>	
						</div>
					</div>			
					<div class="col-lg-3 col-sm-3 col-xs-12 mix category-1" data-myorder="1">
						<div class="work-item">
							<div class="items"><img alt="" class="" src="images/work/work-35.jpg"></div>
							<div class="mask2">
								<a><h4>The Shuttlers</h4></a>
								<a class="info"><p>August 23, 2016</p></a>
							</div>	
						</div>
					</div>	
                	<div class="col-lg-3 col-sm-3 col-xs-12 mix category-3" data-myorder="1">
						<div class="work-item">
							<div class="items"><img alt="" class="" src="images/work/work-1.jpg"></div>
							<div class="mask2">
								<a><h4>Seminar on Ethical hacking</h4></a>
								<a class="info"><p>April 18, 2016</p></a>
								<div style="text-align: center;">
									<a class="btn btn-chos hvr-bounce-to-left info event-detail-popup" style="background-color:#2EADAB; min-width:20%; " href="eventPopUpPages/event1.html" title="View Details"> View Details</a>
								</div>
							</div>	
						</div>
					</div>
					<div class="col-lg-3 col-sm-3 col-xs-12 mix category-3" data-myorder="1">
						<div class="work-item">
							<div class="items"><img alt="" class="" src="images/work/work-5.jpg"></div>
							<div class="mask2">
								<a><h4>Workshop by Netmax</h4></a>
								<a class="info"><p>April 8, 2016</p></a>
								<div style="text-align: center;">
									<a class="btn btn-chos hvr-bounce-to-left info event-detail-popup" style="background-color:#2EADAB; min-width:20%; " href="eventPopUpPages/event5.html" title="View Details"> View Details</a>
								</div>
							</div>	
						</div>
					</div>
					<div class="col-lg-3 col-sm-3 col-xs-12 mix category-1" data-myorder="1">
						<div class="work-item">
							<div class="items"><img alt="" class="" src="images/work/work-8.jpg"></div>
							<div class="mask2">
								<a><h4>Donate Blood, Save Lives</h4></a>
								<a class="info"><p>April 7, 2016</p></a>
								<div style="text-align: center;">
									<a class="btn btn-chos hvr-bounce-to-left info event-detail-popup" style="background-color:#2EADAB; min-width:20%; " href="eventPopUpPages/event8.html" title="View Details"> View Details</a>
								</div>
							</div>	
						</div>
					</div>
					<div class="col-lg-3 col-sm-3 col-xs-12 mix category-3" data-myorder="1">
						<div class="work-item">
							<div class="items"><img alt="" class="" src="images/work/work-7.jpg"></div>
							<div class="mask2">
								<a><h4>Seminar by BSNL</h4></a>
								<a class="info"><p>April 6, 2016</p></a>
								<div style="text-align: center;">
									<a class="btn btn-chos hvr-bounce-to-left info event-detail-popup" style="background-color:#2EADAB; min-width:20%; " href="eventPopUpPages/event7.html" title="View Details"> View Details</a>
								</div>
							</div>	
						</div>
					</div>
					<div class="col-lg-3 col-sm-3 col-xs-12 mix category-3" data-myorder="1">
						<div class="work-item">
							<div class="items"><img alt="" class="" src="images/work/work-6.jpg"></div>
							<div class="mask2">
								<a><h4>Workshop on PHONEGAP by HCL</h4></a>
								<a class="info"><p>April 5, 2016</p></a>
								<div style="text-align: center;">
									<a class="btn btn-chos hvr-bounce-to-left info event-detail-popup" style="background-color:#2EADAB; min-width:20%; " href="eventPopUpPages/event6.html" title="View Details"> View Details</a>
								</div>
							</div>	
						</div>
					</div>
					<div class="col-lg-3 col-sm-3 col-xs-12 mix category-2" data-myorder="1">
						<div class="work-item">
							<div class="items"><img alt="" class="" src="images/work/work-2.jpg"></div>
							<div class="mask2">
								<a><h4>Code Quest</h4></a>
								<a class="info"><p>March 3, 2016</p></a>
								<div style="text-align: center;">
									<a class="btn btn-chos hvr-bounce-to-left info event-detail-popup" style="background-color:#2EADAB; min-width:20%; " href="eventPopUpPages/event2.html" title="View Details"> View Details</a>
								</div>
							</div>	
						</div>
					</div>
					<div class="col-lg-3 col-sm-3 col-xs-12 mix category-1" data-myorder="1">
						<div class="work-item">
							<div class="items"><img alt="" class="" src="images/work/work-3.jpg"></div>
							<div class="mask2">
								<a><h4>Beg, Borrow, Steal</h4></a>
								<a class="info"><p>Februray 4, 2016</p></a>
								<div style="text-align: center;">
									<a class="btn btn-chos hvr-bounce-to-left info event-detail-popup" style="background-color:#2EADAB; min-width:20%; " href="eventPopUpPages/event3.html" title="View Details"> View Details</a>
								</div>
							</div>	
						</div>
					</div>
					<div class="col-lg-3 col-sm-3 col-xs-12 mix category-2" data-myorder="1">
						<div class="work-item">
							<div class="items"><img alt="" class="" src="images/work/work-9.jpg"></div>
							<div class="mask2">
								<a><h4>QUIZ by TECHIES</h4></a>
								<a class="info"><p>February 3, 2016</p></a>
							</div>	
						</div>
					</div>
					<div class="col-lg-3 col-sm-3 col-xs-12 mix category-4" data-myorder="1">
						<div class="work-item">
							<div class="items"><img alt="" class="" src="images/work/work-4.jpg"></div>
							<div class="mask2">
								<a><h4>IRIS' 15</h4></a>
								<a class="info"><p>2015</p></a>
							</div>	
						</div>
					</div>
					<div class="col-lg-3 col-sm-3 col-xs-12 mix category-2" data-myorder="1">
						<div class="work-item">
							<div class="items"><img alt="" class="" src="images/work/work-11.jpg"></div>
							<div class="mask2">
								<a><h4>From Inside The Room</h4></a>
								<a class="info"><p>2015</p></a>
							</div>	
						</div>
					</div>
					<div class="col-lg-3 col-sm-3 col-xs-12 mix category-2" data-myorder="1">
						<div class="work-item">
							<div class="items"><img alt="" class="" src="images/work/work-10.jpg"></div>
							<div class="mask2">
								<a><h4>Competetive Exam Challenge (IBT)</h4></a>
								<a class="info"><p>April 15&16, 2015</p></a>
							</div>	
						</div>
					</div>
					<div class="col-lg-3 col-sm-3 col-xs-12 mix category-3" data-myorder="1">
						<div class="work-item">
							<div class="items"><img alt="" class="" src="images/work/work-19.jpg"></div>
							<div class="mask2">
								<a><h4>Flash Classes on Data Analytics</h4></a>
								<a class="info"><p>April, 2015</p></a>
							</div>	
						</div>
					</div>
					<div class="col-lg-3 col-sm-3 col-xs-12 mix category-2" data-myorder="1">
						<div class="work-item">
							<div class="items"><img alt="" class="" src="images/work/work-21.jpg"></div>
							<div class="mask2">
								<a><h4>Mock Placement Drive</h4></a>
								<a class="info"><p>March 2-4, 2015</p></a>
							</div>	
						</div>
					</div>
					<div class="col-lg-3 col-sm-3 col-xs-12 mix category-2" data-myorder="1">
						<div class="work-item">
							<div class="items"><img alt="" class="" src="images/work/work-22.jpg"></div>
							<div class="mask2">
								<a><h4>Mock Placements (TIMES)</h4></a>
								<a class="info"><p>February 3, 2015</p></a>
							</div>	
						</div>
					</div>
					<div class="col-lg-3 col-sm-3 col-xs-12 mix category-2" data-myorder="1">
						<div class="work-item">
							<div class="items"><img alt="" class="" src="images/work/work-20.jpg"></div>
							<div class="mask2">
								<a><h4>INSOMIA (Tri Series)</h4></a>
								<a class="info"><p>March, 2015</p></a>
							</div>	
						</div>
					</div>
					<div class="col-lg-3 col-sm-3 col-xs-12 mix category-1" data-myorder="1">
						<div class="work-item">
							<div class="items"><img alt="" class="" src="images/work/work-23.jpg"></div>
							<div class="mask2">
								<a><h4>Spell Bee</h4></a>
								<a class="info"><p>October 7-8, 2014</p></a>
							</div>	
						</div>
					</div>
					<div class="col-lg-3 col-sm-3 col-xs-12 mix category-2" data-myorder="1">
						<div class="work-item">
							<div class="items"><img alt="" class="" src="images/work/work-12.jpg"></div>
							<div class="mask2">
								<a><h4>Code Overnight</h4></a>
								<a class="info"><p>September 27, 2014</p></a>
							</div>	
						</div>
					</div>
					<div class="col-lg-3 col-sm-3 col-xs-12 mix category-2" data-myorder="1">
						<div class="work-item">
							<div class="items"><img alt="" class="" src="images/work/work-13.jpg"></div>
							<div class="mask2">
								<a><h4>Polish HTML,Css Skills</h4></a>
								<a class="info"><p>September 16, 2014</p></a>
							</div>	
						</div>
					</div>
					<div class="col-lg-3 col-sm-3 col-xs-12 mix category-4" data-myorder="1">
						<div class="work-item">
							<div class="items"><img alt="" class="" src="images/work/work-18.jpg"></div>
							<div class="mask2">
								<a><h4>IRIS' 13</h4></a>
								<a class="info"><p>2013</p></a>
							</div>	
						</div>
					</div>
					<div class="col-lg-3 col-sm-3 col-xs-12 mix category-1" data-myorder="1">
						<div class="work-item">
							<div class="items"><img alt="" class="" src="images/work/work-17.jpg"></div>
							<div class="mask2">
								<a><h4>Battlefield</h4></a>
								<a class="info"><p>October 11, 2012</p></a>
							</div>	
						</div>
					</div>
					<div class="col-lg-3 col-sm-3 col-xs-12 mix category-2" data-myorder="1">
						<div class="work-item">
							<div class="items"><img alt="" class="" src="images/work/work-15.jpg"></div>
							<div class="mask2">
								<a><h4>Loopscope</h4></a>
								<a class="info"><p>October 11, 2012</p></a>
							</div>	
						</div>
					</div>
					<div class="col-lg-3 col-sm-3 col-xs-12 mix category-3" data-myorder="1">
						<div class="work-item">
							<div class="items"><img alt="" class="" src="images/work/work-14.jpg"></div>
							<div class="mask2">
								<a><h4>Workshop on HTML</h4></a>
								<a class="info"><p>April 10-11, 2012</p></a>
							</div>	
						</div>
					</div>
					<div class="col-lg-3 col-sm-3 col-xs-12 mix category-4" data-myorder="1">
						<div class="work-item">
							<div class="items"><img alt="" class="" src="images/work/work-24.jpg"></div>
							<div class="mask2">
								<a><h4>TECHNOID' 12</h4></a>
								<a class="info"><p>2012</p></a>
							</div>	
						</div>
					</div>
					<div class="col-lg-3 col-sm-3 col-xs-12 mix category-4" data-myorder="1">
						<div class="work-item">
							<div class="items"><img alt="" class="" src="images/work/work-26.jpg"></div>
							<div class="mask2">
								<a><h4>UTPANN' 12</h4></a>
								<a class="info"><p>2012</p></a>
							</div>	
						</div>
					</div>
					<div class="col-lg-3 col-sm-3 col-xs-12 mix category-3" data-myorder="1">
						<div class="work-item">
							<div class="items"><img alt="" class="" src="images/work/work-27.jpg"></div>
							<div class="mask2">
								<a><h4>Loophole</h4></a>
								<a class="info"><p>August 31 - September 1, 2012</p></a>
							</div>	
						</div>
					</div>
					<div class="col-lg-3 col-sm-3 col-xs-12 mix category-4" data-myorder="1">
						<div class="work-item">
							<div class="items"><img alt="" class="" src="images/work/work-15.jpg"></div>
							<div class="mask2">
								<a><h4>IGNIS' 11</h4></a>
								<a class="info"><p>2011</p></a>
							</div>	
						</div>
					</div>
					<div class="col-lg-3 col-sm-3 col-xs-12 mix category-1" data-myorder="1">
						<div class="work-item">
							<div class="items"><img alt="" class="" src="images/work/work-28.jpg"></div>
							<div class="mask2">
								<a><h4>Roadies</h4></a>
								<a class="info"><p>April 10-15, 2011</p></a>
							</div>	
						</div>
					</div>
					<div class="col-lg-3 col-sm-3 col-xs-12 mix category-3" data-myorder="1">
						<div class="work-item">
							<div class="items"><img alt="" class="" src="images/work/work-29.jpg"></div>
							<div class="mask2">
								<a><h4>Demystifying Numbers</h4></a>
								<a class="info"><p>March, 2011</p></a>
							</div>	
						</div>
					</div>
					<div class="col-lg-3 col-sm-3 col-xs-12 mix category-1" data-myorder="1">
						<div class="work-item">
							<div class="items"><img alt="" class="" src="images/work/work-30.jpg"></div>
							<div class="mask2">
								<a><h4>Rebuttal</h4></a>
								<a class="info"><p>March 8, 2011</p></a>
							</div>	
						</div>
					</div>
					<div class="col-lg-3 col-sm-3 col-xs-12 mix category-1" data-myorder="1">
						<div class="work-item">
							<div class="items"><img alt="" class="" src="images/work/work-31.jpg"></div>
							<div class="mask2">
								<a><h4>Miami Ink</h4></a>
								<a class="info"><p>March 8, 2011</p></a>
							</div>	
						</div>
					</div>
					<div class="col-lg-3 col-sm-3 col-xs-12 mix category-2" data-myorder="1">
						<div class="work-item">
							<div class="items"><img alt="" class="" src="images/work/work-32.jpg"></div>
							<div class="mask2">
								<a><h4>Code Hunt</h4></a>
								<a class="info"><p>March 8, 2011</p></a>
							</div>	
						</div>
					</div>
					<div class="col-lg-3 col-sm-3 col-xs-12 mix category-4" data-myorder="1">
						<div class="work-item">
							<div class="items"><img alt="" class="" src="images/work/work-16.jpg"></div>
							<div class="mask2">
								<a><h4>UTPANN' 11</h4></a>
								<a class="info"><p>2011</p></a>
							</div>	
						</div>
					</div>
					<div class="col-lg-3 col-sm-3 col-xs-12 mix category-3" data-myorder="1">
						<div class="work-item">
							<div class="items"><img alt="" class="" src="images/work/work-34.jpg"></div>
							<div class="mask2">
								<a><h4>Flash Classes on C Language</h4></a>
								<a class="info"><p>February 15, 2011</p></a>
							</div>	
						</div>
					</div>
					<div class="col-lg-3 col-sm-3 col-xs-12 mix category-3" data-myorder="1">
						<div class="work-item">
							<div class="items"><img alt="" class="" src="images/work/work-33.jpg"></div>
							<div class="mask2">
								<a><h4>Workshop on Microsoft Exchange Server</h4></a>
								<a class="info"><p>February 7-12, 2011</p></a>
							</div>	
						</div>
					</div>
					<!--/ End: Work Item 8 -->
				</div><!--/project-list --> 
            </div>
			<!--/.col-lg-12 col-sm-6-->
        </div>
    </div>
    <div style="text-align: center; margin-top: 40px; ">
		<a class="btn btn-chos hvr-bounce-to-left" style="background-color:#2EADAB; min-width:20%; " href="home.php#events" title="Go Back"><b>GO BACK</b></a>
	</div>
    <!--/.container-->
</section>
<!-- End:Our Work Section 
==================================================-->



<!-- Start:Footer Section 
==================================================--> 
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
				<!-- col-md-4 -->
				<script>
				function scropToTop(){
					$('html, body').animate({ scrollTop: 0 }, 'fast');
				}
				</script>
				<div class="col-md-4 col-sm-2 text-right wow fadeInDown" data-wow-duration=".5s" data-wow-delay=".2s">
					<a class="scrollup arrow_carrot-up" onclick="scropToTop()" >
					</a>
				</div>
				<!-- col-md-4 -->
			</div>
			<!-- row -->
		</div>
		<!-- container -->
	</div>  
	<!-- footer-section-1 -->
</footer>
<!-- End:Footer Section 
========================================-->

	
<!-- Scripts
========================================-->
<!-- jquery -->
<script src="js/vendor/jquery-1.12.0.min.js" type="text/javascript" ></script>
<!-- Modernizer -->
<script src="js/modernizr.custom.php" type="text/javascript"></script>
<!-- plugins -->
<script src="js/plugins.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script> 
<!-- Use For Animation -->
<script src="js/wow.min.js"></script>

<!-- Use For Map -->
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
 <!-- Use For Map -->
 <script src="js/maps.js"></script>
<!-- Use For carousel -->
<script src="js/owl.carousel.min.js"></script>
<!-- Use For mixitup gallery -->
<script src="js/jquery.mixitup.min.js"></script>
<!-- Use For Animated Header -->
<script src="js/animatedheader.js"></script>
<!-- Use For Image Peview -->
 <script src="js/jquery.prettyPhoto.js"></script>
<!-- Use For single Page Nav -->
<script src="js/jquery.singlePageNav.min.js"></script>
<!--fswit Switcher   -->
<script src="js/fswit.js"></script>
<!-- Custom Scripts
========================================-->
<script src="js/main.js"></script>

<!--magnific-popup script-->
<script src="js/magnific-popup/magnific-popup.js"></script>
<!--magnific-popup intialisation-->
<script>
$(document).ready(function() {
  $('.event-detail-popup').magnificPopup({type:'ajax'});
});
</script>

</body>
</html>
