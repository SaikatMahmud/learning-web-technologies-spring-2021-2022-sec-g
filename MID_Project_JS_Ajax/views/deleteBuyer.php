<?php 
	require('header.php');
	require_once('../models/buyer_sellerModel.php');
	$id= $_GET['id'];
	$deleted= deleteBuyer($id);
	if($deleted)
	{
		header("location: buyerSellerList.php");
	}
	else{
		header("location:  buyerSellerList.php?msgB=deleteError");
	}

?>