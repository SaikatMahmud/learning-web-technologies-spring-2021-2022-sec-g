<?php 
	require('header.php');
	require_once('../models/userModel.php');
	$id= $_GET['id'];
	$deleted= deleteUser($id);
	if($deleted)
	{
		header("location: userlist.php");
	}
	else{
		header("location: userlist.php?msg=deleteError");
	}

?>