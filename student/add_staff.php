<?php ob_start();
	include "../include/db_connect.php";
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Staff Time Table</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Staff Time Table" />
<link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="../css/style.css" rel='stylesheet' type='text/css' />	
<script src="../js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="../js/move-top.js"></script>
<script type="text/javascript" src="../js/easing.js"></script>
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
<link rel="stylesheet" href="../css/lightbox.css">

<!--animate-->
<link href="../css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="../js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<style type="text/css">
	.navbar {
	float:left!important;
	width:65%!important;
	padding:1.4em 0!important;
}
.navbar-nav > li {
	margin-right:14px!important;
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
						<?php include "menu.php"; 
							menu("menu2");
						?>
			<!-- /.navbar-collapse -->
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
					<h3 class="tittle wow bounceIn"  data-wow-duration=".8s" data-wow-delay=".2s">Add New Staff Detail</h3>
	
						   <form action="#" method="post" class="contact" enctype="multipart/form-data">
									<div class="styled-input" style="margin-top:55px;">
									  <input type="text" name="name" required />
									  <label>Name</label>
									  <span></span> </div>
									<div class="styled-input">
									  <input type="email" required name="email"/>
									  <label>Email</label>
									  <span></span> </div>
									<div class="styled-input">
									  <textarea required name="address"></textarea>
									  <label>Address</label>
									  <span></span> </div>
									<div>
									<label style="font-weight:normal;padding-left:10px;">Photo</label>
									  <input type="file" required name="photo"/>
									  
									  <span></span> </div>
									</div>
					<div class="col-md-6 contact-in wow fadeInUp"  data-wow-duration="1s" data-wow-delay=".5s">
								<div class="styled-input" >
									  <input type="text" required name="cno"/>
									  <label>Contact Number</label>
									  <span></span> </div>
									<div>
									<label style="font-weight:normal;padding-left:10px;">Department</label><br/>

									  <select required name="dept" style="margin-top:5px;width:100%;padding:7px;">
										<option value="">Select Department</option>
										 <?php
			$qry=mysql_query("select * from department");
			$no=mysql_num_rows($qry);
				if($no>0)
				{
				while($row=mysql_fetch_array($qry))
						{
						?>
										<option value="<?php echo $row['dname']; ?>"><?php echo $row['dname']; ?></option>
				<?php
						}
				}
				?>
									  </select>
									  
									  <span></span> </div>
									<div class="styled-input">
									  <textarea required name="specialist"></textarea>
									  <label>Subject</label>
									  <span></span> </div>
										<div class="send">
											<input type="submit" value="Register" name="submit">
									</div>
						
						
						</form>
						<?php
							if(isset($_POST['submit']))
							{
							extract($_POST);
							$fname=$_FILES['photo']['name'];     
		
							$move=move_uploaded_file($_FILES['photo']['tmp_name'],"staff/".$fname);
							
							$cdate=date('d-m-Y');
							
							if($move)
							{
							$qry=mysql_query("insert into staff_detail(cdate,name,cno,email,dept,staff_id,pword,address,specialist,photo)values('$cdate','$name','$cno','$email','$dept','$staff_id','$pword','$address','$specialist','$fname')");
								if($qry)
								{
									$id=mysql_insert_id();
									$staff_id="STAFF".$id;
									
									$update=mysql_query("update staff_detail set staff_id='$staff_id',pword='$staff_id' where id='$id'");
									if($update){
										header("location:staff.php");
									}
								}
								else
								{
									echo "<script>alert('Register Again')</script>";
									//echo mysql_error();
								}
							}
							else
								{
									echo "<script>alert('File Not Moved')</script>";
									//echo mysql_error();
								}							
						}
					?>	
					</div>
					
						<div class="clearfix"> </div>
			      </div>
				   <!--map-->
				    
				<!--//map-->
			 </div>
		</div>
		<!--//contact-->
<!--footer-->
<div class="footer">
		<div class="container">
			
				<p class="footer-class"> Staff Time Table </p>
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