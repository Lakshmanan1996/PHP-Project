<?php ob_start();
	include "include/db_connect.php";
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Student Time Table</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Student Time Table" />
<script type="applisalonion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/iconeffects.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />	
<link rel="stylesheet" href="css/leoslider.css">
<link href="css/iconeffects.css" rel='stylesheet' type='text/css' />
<script src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<!--/web-font-->
	<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Nosifer' rel='stylesheet' type='text/css'>
<!--/script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
<!-- swipe box js -->
	<script src="js/jquery.leoslider.js"></script> 
	    <script src="js/main.js"></script> 
<!-- //swipe box js -->
<style type="text/css">
	.nav > li > a {
		padding: 10px 25px!important;
	}
</style>
</head>
<body>
<!--start-home-->
<div class="main-header" id="house">
			<div class="header-strip">
			   <div class="container">
				<p class="location"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>info@college.in</p>
				<p class="phonenum"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>0431 233 1135</p>
				
				<div class="clearfix"></div>
			</div>
			</div>
			<div class="header-top">
			<div class="logo"><a href="index.php"><h1><span>S</span>tudent <span class="two">T</span>ime <span class="two">T</span>able</h1></a></div>
						<nav class="navbar navbar-default">
					  <div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
						  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						  </button>
							</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			  <ul class="nav navbar-nav">
				<li><a class="active" href="index.php">Home<span class="sr-only">(current)</span></a></li>
				<li><a class="scroll" href="#news">About</a></li>
				<li><a href="login.php">Login</a></li>
				<!--<li><a href="register.php">Register</a></li>-->
				<li><a href="admin/index.php">Admin Login</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
			<div class="clearfix"></div>
	</div>
	
</div>
	<div class="banner-bottom">
		<img src="images/016.jpg" style="width:100%;height:600px;">
	</div>


			</div>
	</div>
<!-- //service-type-grid -->
<!--news-->
		<div class="news-section" id="news">
			<div class="container">
				 <h3 class="tittle">About <span>Us</span></h3>
				<div class="news-left">			
					<div class="col-md-6 col-news-right">
						<div class="col-news-top">
							<a href="single.php" class="date-in">
								<img class="img-responsive mix-in" src="images/004.jpg" alt="">
								<div class="month-in">
								  <label>
									
								  </label>
								</div>
							</a>
							<div class="clearfix"> </div>
							<div class="col-bottom">
							
							<p>Due to a non-automatic perspective, absolute utilization of resources has proven ineffective. In order to deal with such problems, a mechanized system can be designed with a computer aided timetable generator. Timetable Management System contains a database, which stores the student personal details. Only the administrator can view, add and delete the data in the timetable. The main objective of developing the Timetable Management System is to have a quality and feasible timetable which is to improve the current system. </p>
							
						</div>
						</div>	
							
					</div>
					<div class="col-md-6 col-news">
						<div class="col-bottom two">
							<h4>Student Time Table</h4>
							<p>In this paper an effective student timetable management system introduced. It is used to manage the timetable of student in any organization. All organizations and institutions are established to achieve specific objectives or goals. The hand operated system of time table preparation in colleges is very monotonous and time-consuming which results in either the same teachers ending up with more than one class at a time or a number of classes conflicting at the same classroom.  </p>
							
						</div>
						<div class="col-news-top">
						
							<a href="single.php" class="date-in">
								<img class="img-responsive mix-in" src="images/001.jpg" alt="">
								<div class="month-in">
								  <label>
									
								  </label>
								</div>
							</a>
							<div class="clearfix"> </div>
							
						</div>					
						
					
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	<!--//news-->

 <!--start-services-->
	<!--end-team-->

<!--start-banner-bottom-->
   <!--/reviews-->
	
<!--//reviews-->


<!--Gallery-->

<!-- //gallery -->


<!--footer-->
<div class="footer">
	<p class="footer-class"> Student Time Table </p>
</div>
	
		<!--start-smooth-scrolling-->
						<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
								<!--end-smooth-scrolling-->
		<a href="#house" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<script src="js/bootstrap.js"></script>
</body>
</html>