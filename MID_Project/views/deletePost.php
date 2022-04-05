<?php 
	require('header.php');
	require_once('../models/postModel.php');
	$id= $_GET['id'];
	$deleted= deletePost($id);
	if($deleted)
	{
		header("location: viewPostAdmin.php");
	}
	else{
		header("location: viewPostAdmin.php?msg=deleteError");
	}

?>