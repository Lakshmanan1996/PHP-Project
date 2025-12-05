<?php ob_start();
	include "../include/db_connect.php";
	
	if($_REQUEST['id']!=="")
	{
		$id=$_REQUEST['id'];
		$qry=mysql_query("delete from department where did='$id'");
		
	}
	header("location:dept.php");
?>