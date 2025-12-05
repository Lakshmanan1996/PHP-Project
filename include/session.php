<?php
	session_start();
	$id=$_SESSION['id'];
	if($_SESSION['id']=="")
	{
		header("location:login.php");
	}
	$get_user=mysql_query("select * from student_detail where id='$id'");
	$fetch_user=mysql_fetch_array($get_user);
?>