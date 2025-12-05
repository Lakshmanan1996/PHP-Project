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
<link href="css/style.css" rel='stylesheet' type='text/css' />	
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
<link rel="stylesheet" href="css/lightbox.css">

<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
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
				<li><a href="index.php">Home<span class="sr-only">(current)</span></a></li>
				<li><a href="index.php">About</a></li>
				<li><a class="active" href="login.php">Login</a></li>
				<!--<li><a href="register.php">Register</a></li>-->
				<li><a href="admin/index.php">Admin Login</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
			<div class="clearfix"></div>
	</div>
		
		
		</div>
</div>
	 <!--/contact-->
	 <div class="section-contact" id="contact">
	    <div class="container">
           <div class="contact-main">
				    <div class="col-md-6 contact-grid wow fadeInUp"  data-wow-duration="1s" data-wow-delay=".3s">
					<h3 class="tittle wow bounceIn"  data-wow-duration=".8s" data-wow-delay=".2s"> Login</h3>

						   <form method="post" class="contact"><br/>
									<label> Role </label>
									  <select name="role" style="margin-top:5px;width:100%;padding:7px;">
											<option value="">-Select-</option>
											<option value="Staff">Staff</option>
											<option value="Student">Student</option>
									  </select>
									  
									  <span></span> 
									<div class="styled-input">
									  <input type="text" required name="uname" />
									  <label>User Name</label>
									  <span></span> </div>
									<div class="styled-input">
									  <input type="password" required name="pword" />
									  <label>Password</label>
									  <span></span> </div>
									
										<div class="send">
											<input type="submit" value="Login" name="submit">
										</div>
						     </form>

							<?php
							if(isset($_POST['submit']))
							{
							extract($_POST);
							
							$query=mysql_query("select * from register where uname='$uname' and pword='$pword'");
							$no=mysql_num_rows($query);
							$row=mysql_fetch_array($query);
								if($no==1)					
									{
										session_start();
										$_SESSION['id']=$row['id'];
										header("location:profile.php");
									}
									else
									{
										echo "<script>alert('Invalid Username or Password')</script>";
									}
							}	
						?>
					   </div>
					<div class="col-md-6 contact-in wow fadeInUp"  data-wow-duration="1s" data-wow-delay=".5s">
						
					 <h3 class="tittle">Recent <span>News</span></h3>
					
					
						<div class="col-news-top">
							<a href="single.php" class="date-in">
								<img class="img-responsive mix-in" src="images/c4.jpg" alt="">
								<div class="month-in">
								  <label>
									
								  </label>
								</div>
							</a>
							
						</div>			
		</div>
					
					
						
			      </div>
				   
			 </div>
		</div>
		<!--//contact-->
<!--footer-->
<div class="footer">
		<div class="container">
		
				<p class="footer-class"> Student Time Table </p>
		</div>
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