<?php ob_start();
	include "../include/db_connect.php";
	
	if($_REQUEST['id']!=="")
	{
		$id=$_REQUEST['id'];
		$qry=mysql_query("delete from class_allot where cid='$id'");
		
	}
	header("location:class.php");
?>