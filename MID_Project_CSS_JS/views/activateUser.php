<?php 
	require('header.php');
	require_once('../models/userModel.php');
	$id= $_GET['id'];
	$activated= activeUser($id);
	if($activated)
	{
		header("location: userlist.php");
	}
	else{
	    echo "Activate operation failed";
	}

?>