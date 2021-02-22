<?php
	session_start();
	if(isset($_SESSION['id'])){
			include('admin_login.php');
	}
	else{
		include("admin-index.php");
		}
		
	if(!isset($_SESSION['id']) || (trim($_SESSION['id']) == ''))
	{
		header("location:admin_login.php"); 
		exit();
	}
?>