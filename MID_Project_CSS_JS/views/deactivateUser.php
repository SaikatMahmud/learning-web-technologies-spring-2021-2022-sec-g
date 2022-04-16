<?php 
	require('header.php');
	require_once('../models/userModel.php');
	$id= $_GET['id'];
	$deactivated= deactiveUser($id);
	if($deactivated)
	{
		header("location: userlist.php");
	}
	else{
	    echo "Deactivate operation failed";
	}

?>