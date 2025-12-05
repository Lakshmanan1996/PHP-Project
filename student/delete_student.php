<?php ob_start();
	include "../include/db_connect.php";
	
	if($_REQUEST['id']!=="")
	{
		$id=$_REQUEST['id'];
		$qry=mysql_query("delete from student_detail where id='$id'");
		
	}
	header("location:student.php");
?>