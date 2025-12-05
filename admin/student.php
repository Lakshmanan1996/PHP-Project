<?php ob_start();
	include "../include/db_connect.php";
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Student Time Table</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="applisalonion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
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

<style>
table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #fff;
}

th, td {
    border: none;
    text-align: left;
    padding: 8px;
	height:30px;
}

tr:nth-child(even){background-color:#EEEEEE }
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
					menu("menu1");
				?>
		  </div><!-- /.container-fluid -->
		</nav>
			<div class="clearfix"></div>
	</div>
		</div>
</div>
	 <!--/contact-->
	 <div class="section-contact" id="contact">
	    <div class="container">
		<h3 class="tittle wow bounceIn"  data-wow-duration=".8s" data-wow-delay=".2s">Student Details <a href="add_student.php" style="float:right;text-transform:capitalize;float:right;font-size:18px;background:#ccc;padding:0px 15px;">Add Student Detail</a></h3> 
           <div class="contact-main">
		   <?php
			$qry=mysql_query("select * from student_detail");
			$no=mysql_num_rows($qry);
				if($no>0)
				{
		  ?>
				<div style="overflow-x:auto;">
				<table class="table table-striped">
					<thead style="background:#2AD2C9;">
					  <tr>
						<th>S.No</th>
						<th>Student Name</th>
						<th>Photo</th>
						<th>Contact No</th>
						<th>Email</th>              
						<th>Department</th>                           
						<th>Address</th>              
						<th>Decision</th>              
					  </tr>
					</thead>
					<tbody>
					<?php	$i=1;
						while($row=mysql_fetch_array($qry))
						{
					?>
					  <tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $row['name']; ?></td>
						<td><img src="student/<?php echo $row['photo']; ?>" style="width:80px;height:80px;border-radius:180px;"></td>
						<td><?php echo $row['cno']; ?></td>
						<td><?php echo $row['email']; ?></td>
						<td><?php echo $row['dept']; ?></td>
						<td><?php echo $row['address']; ?></td>
						<td><a style="background:#FF002A;color:white;padding:3px;" href="delete_student.php?id=<?php echo $row['id']; ?>"> Delete </a> </td>
					  </tr>
					 <?php $i++;
						}
					 ?>   
					</tbody>
				  </table>
				  </div>
				   <?php
					}	
					else
					{
						echo "<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp; Sorry No Doctors List Found<br/><br/>";
					}			
				?>
			</div>	   
		</div>
	 </div>

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
	<script src="../js/bootstrap.js"></script>
</body>
</html>