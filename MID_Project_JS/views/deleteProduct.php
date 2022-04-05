<?php 
	require('header.php');
	require_once('../models/productModel.php');
	$id= $_GET['id'];
	$deleted= deleteProduct($id);
	if($deleted)
	{
		header("location: productListAdmin.php");
	}
	else{
		header("location: productListAdmin.php?msg=deleteError");
	}

?>